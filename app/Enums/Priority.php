<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasIcon;

enum Priority: string implements HasLabel, HasColor, HasIcon {
    case Low = 'low';
    case Medium = 'medium';
    case High = 'high';
    case Urgent = 'urgent';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Low => 'Low',
            self::Medium => 'Medium',
            self::High => 'High',
            self::Urgent => 'Urgent',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::Low => 'success',
            self::Medium => 'info',
            self::High => 'warning',
            self::Urgent => 'danger',
        };
    }

    public function getIcon(): string | null
    {
        return match ($this) {
            self::Low => 'heroicon-o-arrow-down',
            self::Medium => 'heroicon-o-adjustments',
            self::High => 'heroicon-o-arrow-up',
            self::Urgent => 'heroicon-o-fire',
        };
    }

    public function getColorHtml(): ?string
    {
        return match ($this) {
            self::Low => 'bg-green-100',
            self::Medium => 'bg-blue-100',
            self::High => 'bg-yellow-100',
            self::Urgent => 'bg-red-100',
        };
    }

    public function getLabelText(): ?string
    {
        return match ($this) {
            self::Low => 'Baja',
            self::Medium => 'Media',
            self::High => 'Alta',
            self::Urgent => 'Urgente',
        };
    }

    public function getLabelHtml(): ?string
    {
        return '<span class="py-1 px-3 rounded '.$this->getColorHtml().'">'.$this->getLabelText().'</span>';
    }
}