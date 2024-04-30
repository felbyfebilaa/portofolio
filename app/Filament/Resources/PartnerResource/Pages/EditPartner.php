<?php

namespace App\Filament\Resources\PartnerResource\Pages;

use App\Filament\Resources\PartnerResource;
use Filament\Actions;
use App\Models\partner;
use illuminate\Support\Facedes\Storage;
use Filament\Resources\Pages\EditRecord;

class EditPartner extends EditRecord
{
    protected static string $resource = PartnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(partner $record){
                    if($record->thumnail){
                        Storage::disk('public')->delete($record->thumnail);
                    }
        
                }
            ),
        ];
    }
}
