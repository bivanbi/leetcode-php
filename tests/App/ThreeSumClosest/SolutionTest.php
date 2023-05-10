<?php

namespace Tests\App\ThreeSumClosest;

use App\ThreeSumClosest\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    private Solution $instance;

    protected function setUp(): void
    {
        parent::setUp();
        $this->instance = new Solution();
    }

    public function testCaseOne()
    {
        self::assertEquals(2, $this->instance->threeSumClosest([-1,2,1,-4], 1));
    }

    public function testCaseTwo()
    {
        self::assertEquals(0, $this->instance->threeSumClosest([0,0,0], 0));
    }

    public function testCaseThree()
    {
        self::assertEquals(2, $this->instance->threeSumClosest([1,1,1,0], -100));
    }

    public function testCaseLong()
    {
        $numbers = [-1,-69,544,-440,-622,-967,-61,-249,757,158,953,813,360,301,542,26,-500,-228,-693,705,-485,-734,
            -484,349,-211,-508,-555,-512,936,-959,-424,-577,-659,854,-968,876,-619,-658,328,-303,101,96,949,-980,
            -995,863,629,-823,-459,-57,994,-203,-787,-828,290,2,164,-539,-9,-446,622,140,18,282,-96,-3,829,896,-829,
            767,522,-712,-527,-795,656,-242,822,-984,543,-576,-318,-379,-987,252,-727,98,-909,-238,814,-159,-245,322,
            -861,-16,-562,31,418,378,396,893,-94,-226,84,-896,627,-953,840,-164,915,-632,-540,-213,702,208,152,513,804,
            -127,121,279,651,-80,-838,-927,887,-853,128,869,7,-703,220,-924,-583,-943,-206,485,-819,245,-835,442,-543,
            -986,533,696,-716,-650,-774,175,358,-803,102,-116,-535,-678,950,855,-615,167,962,-415,897,694,-723,-731,174,
            -376,751,165,-958,838,616,877,-715,-707,634,-589,-316,60,-697,839,413,-845,564,333,-514,986,998,-673,475,
            -836,-334,460,-826,649,185,868,-834,-554,235,148,-511,810,155,948,906,910,-85,769,-815,826,-248,-425,
            -110,137,78,127,-824,-932,82,264,-890,-377,205,249,-954,241,958,30,508,-719,35,-662,254,-930,186,761,
            -277,537,-471,-348,-750,766,899,-843,604,960,455,786,19,-151,172,401,652,-271,131,551,115,911,-223,912,
            408,296,364,-117,623,-616,-204,162,-946,207,81,-590,315,4,-692,985,-919,332,395,426,898,529,240,-799,-637,
            -801,-830,-407,409,-735,-918,816,502,-797,-949,938,118,-768,389,-886,-220,181,-760,-464,-911,519,-39,5,515,
            -602,132,-818,-625,-878,977,647,269,732,825,126,-480,170,-738,-591,716];

        sort($numbers);

        self::assertEquals(2978, $this->instance->threeSumClosest($numbers, 6539));
    }
}
