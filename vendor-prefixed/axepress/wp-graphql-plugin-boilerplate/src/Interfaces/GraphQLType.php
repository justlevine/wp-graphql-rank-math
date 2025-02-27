<?php
/**
 * Interface for classes that register a GraphQL type to the GraphQL schema.
 *
 * @package AxeWP\GraphQL\Interfaces
 *
 * @license GPL-3.0-or-later
 * Modified by AxePress Development using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace WPGraphQL\RankMath\Vendor\AxeWP\GraphQL\Interfaces;

if ( ! interface_exists( '\WPGraphQL\RankMath\Vendor\AxeWP\GraphQL\Interfaces\GraphQLType' ) ) {

	/**
	 * Interface - GraphQLType
	 */
	interface GraphQLType {
		/**
		 * Register connections to the GraphQL Schema.
		 */
		public static function register() : void;
	}
}
