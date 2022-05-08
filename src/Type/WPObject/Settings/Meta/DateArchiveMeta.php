<?php
/**
 * The DateArchiveMeta GraphQL object.
 *
 * @package WPGraphQL\RankMath\Type\WPObject\Settings\Meta
 */

namespace WPGraphQL\RankMath\Type\WPObject\Settings\Meta;

use AxeWP\GraphQL\Abstracts\ObjectType;
use AxeWP\GraphQL\Interfaces\TypeWithInterfaces;
use WPGraphQL\RankMath\Type\WPInterface\MetaSettingWithArchive;
use WPGraphQL\RankMath\Type\WPInterface\MetaSettingWithRobots;

/**
 * Class - DateArchiveMeta
 */
class DateArchiveMeta extends ObjectType implements TypeWithInterfaces {

	/**
	 * {@inheritDoc}
	 */
	protected static function type_name() : string {
		return 'DateArchiveMetaSettings';
	}

	/**
	 * {@inheritDoc}
	 */
	public static function get_description() : string {
		return __( 'The RankMath SEO DateArchive meta settings.', 'wp-graphql-rank-math' );
	}

	/**
	 * {@inheritDoc}
	 */
	public static function get_interfaces() : array {
		return [
			MetaSettingWithArchive::get_type_name(),
			MetaSettingWithRobots::get_type_name(),
		];
	}

	/**
	 * {@inheritDoc}
	 */
	public static function get_fields() : array {
		$fields = [
			'hasArchives' => [
				'type'        => 'Boolean',
				'description' => __( 'Whether archives are enabled.', 'wp-graphql-rank-math' ),
			],
		];

		return $fields;
	}

}
