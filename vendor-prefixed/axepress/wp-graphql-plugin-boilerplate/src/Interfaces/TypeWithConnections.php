<?php
/**
 * Interface for for classes that register a GraphQL type with connections to the GraphQL schema.
 *
 * @package AxeWP\GraphQL\Interfaces
 *
 * @license GPL-3.0-or-later
 * Modified by AxePress Development using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace WPGraphQL\RankMath\Vendor\AxeWP\GraphQL\Interfaces;

if ( ! interface_exists( '\WPGraphQL\RankMath\Vendor\AxeWP\GraphQL\Interfaces\TypeWithConnections' ) ) {

	/**
	 * Interface - TypeWithConnections
	 */
	interface TypeWithConnections extends GraphQLType {
		/**
		 * Gets the properties for the type.
		 *
		 * @return array<string, array{
		 *   toType: string,
		 *   description: string,
		 *   args?: array<string, array{
		 *     type: string|array<string, string | array<string, string>>,
		 *     description: string,
		 *     defaultValue?: mixed
		 *   }>,
		 *   connectionInterfaces?: string[],
		 *   oneToOne?: bool,
		 *   resolve?: callable,
		 * }>
		 */
		public static function get_connections() : array;
	}
}
