<?php

/** @noinspection PhpUnused */
function getUpdates26_Q1_00(): array {
	return [
		//yanjun
		'overdrive_suppress_kindle_format' => [
			'title' => 'OverDrive Suppress Kindle Format',
			'description' => 'Allow OverDrive scopes to suppress Kindle format in the grouped work',
			'continueOnError' => false,
			'sql' => [
				"ALTER TABLE overdrive_scopes ADD COLUMN suppressKindleFormat TINYINT(1) DEFAULT 0",
			]
		],

		//lucas
		'indexing_profiles_add_default_values' => [
			'title' => 'Indexing Profiles - Add Default Values',
			'description' => 'Add default values to required columns in indexing_profiles table to support multi-step form creation via UI.',
			'continueOnError' => false,
			'sql' => [
				"ALTER TABLE indexing_profiles MODIFY COLUMN recordNumberTag char(3) NOT NULL DEFAULT ''",
				"ALTER TABLE indexing_profiles MODIFY COLUMN recordNumberPrefix varchar(10) NOT NULL DEFAULT ''",
				"ALTER TABLE indexing_profiles MODIFY COLUMN itemTag char(3) NOT NULL DEFAULT ''",
				"ALTER TABLE indexing_profiles MODIFY COLUMN marcPath varchar(100) NOT NULL DEFAULT ''",
				"ALTER TABLE indexing_profiles MODIFY COLUMN indexingClass varchar(50) NOT NULL DEFAULT ''",
			]
		],
	];
}
