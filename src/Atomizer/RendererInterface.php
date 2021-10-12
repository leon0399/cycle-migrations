<?php

/**
 * This file is part of Cycle ORM package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Cycle\Migrations\Atomizer;

use Cycle\Database\Schema\AbstractTable;
use Spiral\Database\Schema\AbstractTable as SpiralAbstractTable;
use Spiral\Reactor\Partial\Source;

/**
 * Renders table differences and create syntaxes into given source.
 */
interface RendererInterface
{
    /**
     * Migration engine specific table creation syntax.
     *
     * @param Source $source
     * @param AbstractTable|SpiralAbstractTable $table The signature of this
     *        argument will be changed to {@see AbstractTable} in future release.
     */
    public function createTable(Source $source, SpiralAbstractTable $table);

    /**
     * Migration engine specific table update syntax.
     *
     * @param Source $source
     * @param AbstractTable|SpiralAbstractTable $table The signature of this
     *        argument will be changed to {@see AbstractTable} in future release.
     */
    public function updateTable(Source $source, SpiralAbstractTable $table);

    /**
     * Migration engine specific table revert syntax.
     *
     * @param Source $source
     * @param AbstractTable|SpiralAbstractTable $table The signature of this
     *        argument will be changed to {@see AbstractTable} in future release.
     */
    public function revertTable(Source $source, SpiralAbstractTable $table);

    /**
     * Migration engine specific table drop syntax.
     *
     * @param Source $source
     * @param AbstractTable|SpiralAbstractTable $table The signature of this
     *        argument will be changed to {@see AbstractTable} in future release.
     */
    public function dropTable(Source $source, SpiralAbstractTable $table);
}
