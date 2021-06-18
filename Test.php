<?php

class Test
{
    /**
     * @phpstan-return non-empty-array<string>
     * @return non-empty-array<string>
     */
    public function foo(): array
    {
        return ['yolo'];
    }

}
