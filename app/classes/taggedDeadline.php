<?php

namespace app\classes;

use app\classes\DeadlineTask;
use app\traits\HashAssaigneTrait;
use app\traits\HasTagsTraits;

class TaggedDeadline extends DeadlineTask
{
    use HasTagsTraits, HashAssaigneTrait;   
}
