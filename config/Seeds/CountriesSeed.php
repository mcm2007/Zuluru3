<?php
use Migrations\AbstractSeed;

/**
 * Countries seed.
 */
class CountriesSeed extends AbstractSeed {
	/**
	 * Data Method.
	 *
	 * @return mixed
	 */
	public function data() {
		return [
			['name' => __d('seeds', 'Portugal')],
			['name' => __d('seeds', 'United Kingdom')],
			['name' => __d('seeds', 'Germany')],
			['name' => __d('seeds', 'France')],
			['name' => __d('seeds', 'Spain')],
			['name' => __d('seeds', 'Italy')],
			['name' => __d('seeds', 'Netherlands')],
			['name' => __d('seeds', 'Belgium')],
			['name' => __d('seeds', 'Austria')],
			['name' => __d('seeds', 'Switzerland')],
			['name' => __d('seeds', 'Sweden')],
			['name' => __d('seeds', 'Denmark')],
			['name' => __d('seeds', 'Norway')],
			['name' => __d('seeds', 'Finland')],
			['name' => __d('seeds', 'Poland')],
			['name' => __d('seeds', 'Czech Republic')],
			['name' => __d('seeds', 'Hungary')],
			['name' => __d('seeds', 'Greece')],
			['name' => __d('seeds', 'Ireland')],
			['name' => __d('seeds', 'Luxembourg')],
			['name' => __d('seeds', 'Croatia')],
			['name' => __d('seeds', 'Romania')],
			['name' => __d('seeds', 'Bulgaria')],
			['name' => __d('seeds', 'Slovakia')],
			['name' => __d('seeds', 'Slovenia')],
			['name' => __d('seeds', 'Estonia')],
			['name' => __d('seeds', 'Latvia')],
			['name' => __d('seeds', 'Lithuania')],
			['name' => __d('seeds', 'Canada')],
			['name' => __d('seeds', 'United States')],
			['name' => __d('seeds', 'Mexico')],
			['name' => __d('seeds', 'Brazil')],
			['name' => __d('seeds', 'Argentina')],
			['name' => __d('seeds', 'Russia')],
			['name' => __d('seeds', 'China')],
			['name' => __d('seeds', 'India')],
			['name' => __d('seeds', 'Japan')],
			['name' => __d('seeds', 'South Korea')],
			['name' => __d('seeds', 'Australia')],
			['name' => __d('seeds', 'New Zealand')],
			['name' => __d('seeds', 'South Africa')],
			['name' => __d('seeds', 'Nigeria')],
			['name' => __d('seeds', 'Egypt')],
			['name' => __d('seeds', 'Kenya')],
			['name' => __d('seeds', 'Turkey')],
			['name' => __d('seeds', 'Saudi Arabia')],
			['name' => __d('seeds', 'Israel')],
			['name' => __d('seeds', 'United Arab Emirates')],
			['name' => __d('seeds', 'Indonesia')],
			['name' => __d('seeds', 'Philippines')],
			['name' => __d('seeds', 'Vietnam')],
			['name' => __d('seeds', 'Thailand')],
			['name' => __d('seeds', 'Malaysia')],
			['name' => __d('seeds', 'Singapore')],
			['name' => __d('seeds', 'Pakistan')],
		];
	}

	/**
	 * Run Method.
	 *
	 * @return void
	 */
	public function run() {
		$table = $this->table('countries');
		$table->insert($this->data())->save();
	}
}
