<?php

/**
 * This file is part of the SgDatatablesBundle package.
 *
 * (c) stwe <https://github.com/stwe/DatatablesBundle>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author nicodmf
 * @author stwe
 */

namespace Sg\DatatablesBundle\Datatable\Column;

/**
 * Class VirtualColumn
 *
 * @package Sg\DatatablesBundle\Datatable\Column
 */
class VirtualColumn extends Column
{
    //-------------------------------------------------
    // ColumnInterface
    //-------------------------------------------------

    /**
     * {@inheritdoc}
     */
    public function getAlias()
    {
        return "virtual";
    }
}