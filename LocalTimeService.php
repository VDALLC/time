<?php
namespace Vda\Time;

class LocalTimeService implements ITimeService
{
    public function getCurrentTime()
    {
        return time();
    }
}
