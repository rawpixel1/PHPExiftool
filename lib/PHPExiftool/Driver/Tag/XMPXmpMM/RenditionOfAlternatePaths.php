<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPXmpMM;

use PHPExiftool\Driver\AbstractTag;

class RenditionOfAlternatePaths extends AbstractTag
{

    protected $Id = 'RenditionOfAlternatePaths';

    protected $Name = 'RenditionOfAlternatePaths';

    protected $FullName = 'XMP::xmpMM';

    protected $GroupName = 'XMP-xmpMM';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-xmpMM';

    protected $g2 = 'Other';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Rendition Of Alternate Paths';

    protected $flag_List = true;

    protected $flag_Seq = true;

}