<?php

namespace Vormkracht10\MediaField;

use Filament\Forms;
use Illuminate\Database\Eloquent\Model;
use Vormkracht10\Backstage\Models\Media as MediaModel;
use Vormkracht10\Fields\Contracts\FieldContract;
use Vormkracht10\Fields\Fields\Base;
use Vormkracht10\Fields\Models\Field;
use Vormkracht10\MediaPicker\Components\MediaPicker as Input;
use Vormkracht10\MediaPicker\MediaPicker;

class Media extends Base implements FieldContract
{
    public static function getDefaultConfig(): array
    {
        return [
            ...parent::getDefaultConfig(),
            'acceptedFileTypes' => ['image/*', 'video/*', 'audio/*', 'application/pdf'],
            'multiple' => false,
        ];
    }

    public static function make(string $name, Field $field): Input
    {
        $input = self::applyDefaultSettings(Input::make($name), $field);

        if (! empty($field->config['acceptedFileTypes']) && ! is_array($field->config['acceptedFileTypes'])) {
            $field->config['acceptedFileTypes'] = [$field->config['acceptedFileTypes']];
        }

        $input = $input->label($field->name ?? self::getDefaultConfig()['label'] ?? null)
            ->acceptedFileTypes($field->config['acceptedFileTypes'] ?? self::getDefaultConfig()['acceptedFileTypes'])
            ->multiple($field->config['multiple'] ?? self::getDefaultConfig()['multiple']);

        return $input;
    }

    public function getForm(): array
    {
        return [
            Forms\Components\Tabs::make()
                ->schema([
                    Forms\Components\Tabs\Tab::make('General')
                        ->label(__('General'))
                        ->schema([
                            ...parent::getForm(),
                        ]),
                    Forms\Components\Tabs\Tab::make('Field specific')
                        ->label(__('Field specific'))
                        ->schema([
                            Forms\Components\Grid::make(2)->schema([
                                Forms\Components\Select::make('config.acceptedFileTypes')
                                    ->label(__('Accepted file types'))
                                    ->options([
                                        'image/*' => 'Images',
                                        'video/*' => 'Videos',
                                        'audio/*' => 'Audio',
                                        'application/pdf' => 'PDF',
                                    ])
                                    ->multiple(),
                                Forms\Components\Toggle::make('config.multiple')
                                    ->label(__('Multiple')),
                            ]),
                        ]),
                ])->columnSpanFull(),
        ];
    }

    public static function mutateFormDataCallback(Model $record, Field $field, array $data): array
    {
        if (! isset($record->values[$field->ulid])) {
            return $data;
        }

        $values = is_array($record->values[$field->ulid])
            ? $record->values[$field->ulid]
            : [$record->values[$field->ulid]];

        $media = MediaModel::whereIn('ulid', $values)
            ->get()
            ->map(function ($media) {
                return 'media/'.$media->filename;
            })->toArray();

        $data['value'][$field->ulid] = $media;

        return $data;
    }

    public static function mutateBeforeSaveCallback(Model $record, Field $field, array $data): array
    {
        if ($field->field_type !== 'media') {
            return $data;
        }

        if (! isset($data['value'][$field->ulid])) {
            return $data;
        }

        $media = MediaPicker::create($data['value'][$field->ulid]);

        $data['value'][$field->ulid] = collect($media)->map(function ($media) {
            return $media->ulid;
        })->toArray();

        return $data;
    }
}
