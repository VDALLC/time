<?php
namespace Vda\Time;

interface ITimeService
{
    /**
     * Return current Unix timestamp (UTC)
     *
     * @return integer
     */
    public function getCurrentTime();
}
