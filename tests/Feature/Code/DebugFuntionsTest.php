<?php

test('there are debug functions')
    ->expect(['dd', 'ddd', 'dump', 'var_dump', 'print_r'])
    ->not->toBeUsed();
