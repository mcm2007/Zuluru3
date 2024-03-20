<?php
namespace App\Test\Fixture_deprecated;

use Cake\I18n\FrozenDate;
use Cake\TestSuite\Fixture\TestFixture;

/**
 * DivisionsFixture
 *
 */
class DivisionsFixture extends TestFixture {

	/**
	 * Import
	 *
	 * @var array
	 */
	public $import = ['table' => 'divisions'];

	/**
	 * Initialize function: Mostly, set up records
	 */
	public function init() {
		$this->records = [
			[
				'name' => 'Competitive',
				'open' => (new FrozenDate('first Monday of June'))->subWeeks(52),
				'close' => (new FrozenDate('first Monday of September'))->subWeeks(52),
				'ratio_rule' => '4/3',
				'current_round' => '1',
				'roster_deadline' => (new FrozenDate('last Monday of August'))->subWeeks(52),
				'roster_rule' => '',
				'is_open' => false,
				'schedule_type' => 'ratings_ladder',
				'games_before_repeat' => 4,
				'allstars' => 'optional',
				'exclude_teams' => false,
				'coord_list' => '',
				'capt_list' => '',
				'email_after' => 36,
				'finalize_after' => 60,
				'roster_method' => 'invite',
				'league_id' => LEAGUE_ID_MONDAY_PAST,
				'rating_calculator' => 'wager',
				'flag_membership' => true,
				'flag_roster_conflict' => true,
				'flag_schedule_conflict' => true,
				'allstars_from' => 'opponent',
				'header' => '',
				'footer' => '',
				'double_booking' => false,
				'most_spirited' => 'never',
			],
			[
				'name' => 'Competitive',
				'open' => new FrozenDate('first Monday of June'),
				'close' => new FrozenDate('first Monday of September'),
				'ratio_rule' => '4/3',
				'current_round' => '1',
				'roster_deadline' => new FrozenDate('last Monday of August'),
				'roster_rule' => '',
				'is_open' => true,
				'schedule_type' => 'ratings_ladder',
				'games_before_repeat' => 4,
				'allstars' => 'optional',
				'exclude_teams' => false,
				'coord_list' => '',
				'capt_list' => '',
				'email_after' => 36,
				'finalize_after' => 60,
				'roster_method' => 'invite',
				'league_id' => LEAGUE_ID_MONDAY,
				'rating_calculator' => 'wager',
				'flag_membership' => true,
				'flag_roster_conflict' => true,
				'flag_schedule_conflict' => true,
				'allstars_from' => 'opponent',
				'header' => '',
				'footer' => '',
				'double_booking' => false,
				'most_spirited' => 'never',
			],
			[
				'name' => 'Competitive 2',
				'open' => new FrozenDate('first Monday of June'),
				'close' => new FrozenDate('first Monday of September'),
				'ratio_rule' => '4/3',
				'current_round' => '1',
				'roster_deadline' => new FrozenDate('last Monday of August'),
				'roster_rule' => '',
				'is_open' => true,
				'schedule_type' => 'ratings_ladder',
				'games_before_repeat' => 4,
				'allstars' => 'never',
				'exclude_teams' => false,
				'coord_list' => '',
				'capt_list' => '',
				'email_after' => 36,
				'finalize_after' => 60,
				'roster_method' => 'invite',
				'league_id' => LEAGUE_ID_MONDAY,
				'rating_calculator' => 'wager',
				'flag_membership' => true,
				'flag_roster_conflict' => true,
				'flag_schedule_conflict' => true,
				'allstars_from' => 'opponent',
				'header' => '',
				'footer' => '',
				'double_booking' => false,
				'most_spirited' => 'never',
			],
			[
				'name' => 'Competitive 3',
				'open' => new FrozenDate('first Monday of June'),
				'close' => new FrozenDate('first Monday of September'),
				'ratio_rule' => '4/3',
				'current_round' => 'playoff',
				'roster_deadline' => null,
				'roster_rule' => '',
				'is_open' => true,
				'schedule_type' => 'ratings_ladder',
				'games_before_repeat' => 4,
				'allstars' => 'never',
				'exclude_teams' => false,
				'coord_list' => '',
				'capt_list' => '',
				'email_after' => 36,
				'finalize_after' => 60,
				'roster_method' => 'invite',
				'league_id' => LEAGUE_ID_MONDAY,
				'rating_calculator' => 'wager',
				'flag_membership' => true,
				'flag_roster_conflict' => true,
				'flag_schedule_conflict' => true,
				'allstars_from' => 'opponent',
				'header' => '',
				'footer' => '',
				'double_booking' => false,
				'most_spirited' => 'never',
			],
			[
				'name' => 'Intermediate',
				'open' => new FrozenDate('first Tuesday of June'),
				'close' => new FrozenDate('first Tuesday of September'),
				'ratio_rule' => '3/3',
				'current_round' => '1',
				'roster_deadline' => new FrozenDate('last Tuesday of August'),
				'roster_rule' => '',
				'is_open' => true,
				'schedule_type' => 'roundrobin',
				'games_before_repeat' => 0,
				'allstars' => 'never',
				'exclude_teams' => true,
				'coord_list' => '',
				'capt_list' => '',
				'email_after' => 36,
				'finalize_after' => 60,
				'roster_method' => 'invite',
				'league_id' => LEAGUE_ID_TUESDAY,
				'rating_calculator' => 'wager',
				'flag_membership' => true,
				'flag_roster_conflict' => true,
				'flag_schedule_conflict' => true,
				'allstars_from' => 'opponent',
				'header' => '',
				'footer' => '',
				'double_booking' => false,
				'most_spirited' => 'never',
			],
			[
				'name' => 'Intermediate',
				'open' => new FrozenDate('second Thursday of June'),
				'close' => new FrozenDate('first Thursday of September'),
				'ratio_rule' => '3/3',
				'current_round' => '1',
				'roster_deadline' => new FrozenDate('last Thursday of August'),
				'roster_rule' => '',
				'is_open' => true,
				'schedule_type' => 'roundrobin',
				'games_before_repeat' => 0,
				'allstars' => 'never',
				'exclude_teams' => true,
				'coord_list' => '',
				'capt_list' => '',
				'email_after' => 36,
				'finalize_after' => 60,
				'roster_method' => 'invite',
				'league_id' => LEAGUE_ID_THURSDAY,
				'rating_calculator' => 'wager',
				'flag_membership' => true,
				'flag_roster_conflict' => true,
				'flag_schedule_conflict' => true,
				'allstars_from' => 'opponent',
				'header' => '',
				'footer' => '',
				'double_booking' => false,
				'most_spirited' => 'never',
			],
			[
				'name' => 'Intermediate',
				'open' => new FrozenDate('second Friday of June'),
				'close' => new FrozenDate('first Friday of September'),
				'ratio_rule' => '3/3',
				'current_round' => '1',
				'roster_deadline' => new FrozenDate('last Friday of August'),
				'roster_rule' => '',
				'is_open' => true,
				'schedule_type' => 'roundrobin',
				'games_before_repeat' => 0,
				'allstars' => 'never',
				'exclude_teams' => true,
				'coord_list' => '',
				'capt_list' => '',
				'email_after' => 36,
				'finalize_after' => 60,
				'roster_method' => 'invite',
				'league_id' => LEAGUE_ID_FRIDAY,
				'rating_calculator' => 'wager',
				'flag_membership' => true,
				'flag_roster_conflict' => true,
				'flag_schedule_conflict' => true,
				'allstars_from' => 'opponent',
				'header' => '',
				'footer' => '',
				'double_booking' => false,
				'most_spirited' => 'never',
			],
			[
				'name' => 'Ladder',
				'open' => (new FrozenDate('first Sunday of June'))->subYears(1),
				'close' => (new FrozenDate('first Sunday of September'))->subYears(1),
				'ratio_rule' => '4/3',
				'current_round' => '1',
				'roster_deadline' => (new FrozenDate('last Sunday of August'))->subYears(1),
				'roster_rule' => '',
				'is_open' => true,
				'schedule_type' => 'ratings_ladder',
				'games_before_repeat' => 4,
				'allstars' => 'never',
				'exclude_teams' => false,
				'coord_list' => '',
				'capt_list' => '',
				'email_after' => 36,
				'finalize_after' => 60,
				'roster_method' => 'invite',
				'league_id' => LEAGUE_ID_SUNDAY_SUB,
				'rating_calculator' => 'wager',
				'flag_membership' => true,
				'flag_roster_conflict' => true,
				'flag_schedule_conflict' => true,
				'allstars_from' => 'opponent',
				'header' => '',
				'footer' => '',
				'double_booking' => false,
				'most_spirited' => 'never',
			],
		];

		if (!defined('DIVISION_ID_MONDAY_LADDER')) {
			$i = 0;
			define('DIVISION_ID_MONDAY_LADDER_PAST', ++$i);
			define('DIVISION_ID_MONDAY_LADDER', ++$i);
			define('DIVISION_ID_MONDAY_LADDER2', ++$i);
			define('DIVISION_ID_MONDAY_PLAYOFF', ++$i);
			define('DIVISION_ID_TUESDAY_ROUND_ROBIN', ++$i);
			define('DIVISION_ID_THURSDAY_ROUND_ROBIN', ++$i);
			define('DIVISION_ID_FRIDAY', ++$i);
			define('DIVISION_ID_SUNDAY_SUB', ++$i);
		}

		parent::init();
	}

}
