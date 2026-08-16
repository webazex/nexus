<?php
declare(strict_types=1);
namespace Webazex\Nexus\Core\Enums;
enum LogLevel: string {
    case INFO = 'info';
    case WARNING = 'warning';
    case ERROR = 'error';
    public function getLevelName(): string
    {
        return match ($this) {
            self::INFO => 'nexus-info.log',
            self::WARNING => 'nexus-warning.log',
            self::ERROR => 'nexus-error.log',
        };
    }
}