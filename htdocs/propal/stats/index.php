<?php
/* Copyright (C) 2003      Rodolphe Quiedeville <rodolphe@quiedeville.org>
 * Copyright (C) 2004-2011 Laurent Destailleur  <eldy@users.sourceforge.net>
 * Copyright (C) 2005-2012 Regis Houssin        <regis@dolibarr.fr>
 * Copyright (C) 2012      Marcos García        <marcosgdf@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 *	    \file       htdocs/comm/propal/stats/index.php
 *      \ingroup    propale
 *		\brief      Page des stats propositions commerciales
 */

require '../../main.inc.php';
require_once DOL_DOCUMENT_ROOT.'/propal/class/propalestats.class.php';
require_once DOL_DOCUMENT_ROOT.'/core/class/dolgraph.class.php';

$WIDTH=500;
$HEIGHT=200;

$userid=GETPOST('userid','alpha'); if (empty($userid)) $userid=null;
$socid=GETPOST('socid','alpha'); if (empty($socid)) $socid=null;
// Security check
if (!empty($user->societe_id))
{
    $action = '';
    $socid = $user->societe_id;
}

$nowyear=strftime("%Y", dol_now());
$year = GETPOST('year')>0?GETPOST('year'):$nowyear;
//$startyear=$year-2;
$startyear=$year-1;
$endyear=$year;


/*
 * View
 */

$form=new Form($db);

$langs->load("propal");

llxHeader();

print_fiche_titre($langs->trans("ProposalsStatistics"));

$dir=$conf->propal->dir_temp;

dol_mkdir($dir);

$stats = new PropaleStats($db, $socid, $userid);

// Build graphic number of object
$data = $stats->getNbByMonthWithPrevYear($endyear,$startyear);
// $data = array(array('Lib',val1,val2,val3),...)


if (!$user->rights->societe->client->voir || $user->societe_id)
{
    $filenamenb = $dir.'/proposalsnbinyear-'.$user->id.'-'.$year.'.png';
    $fileurlnb = DOL_URL_ROOT.'/viewimage.php?modulepart=propalstats&file=proposalsnbinyear-'.$user->id.'-'.$year.'.png';
}
else
{
    $filenamenb = $dir.'/proposalsnbinyear-'.$year.'.png';
    $fileurlnb = DOL_URL_ROOT.'/viewimage.php?modulepart=propalstats&file=proposalsnbinyear-'.$year.'.png';
}

$px1 = new DolGraph();
$mesg = $px1->isGraphKo();
if (! $mesg)
{
    $px1->SetData($data);
    $px1->SetPrecisionY(0);
    $i=$startyear;$legend=array();
    while ($i <= $endyear)
    {
        $legend[]=$i;
        $i++;
    }
    $px1->SetLegend($legend);
    $px1->SetMaxValue($px1->GetCeilMaxValue());
    $px1->SetMinValue(min(0,$px1->GetFloorMinValue()));
    $px1->SetWidth($WIDTH);
    $px1->SetHeight($HEIGHT);
    $px1->SetYLabel($langs->trans("NbOfProposals"));
    $px1->SetShading(3);
    $px1->SetHorizTickIncrement(1);
    $px1->SetPrecisionY(0);
    $px1->mode='depth';
    $px1->SetTitle($langs->trans("NumberOfProposalsByMonth"));

    $px1->draw($filenamenb,$fileurlnb);
}

// Build graphic amount of object
$data = $stats->getAmountByMonthWithPrevYear($endyear,$startyear);
// $data = array(array('Lib',val1,val2,val3),...)

if (!$user->rights->societe->client->voir || $user->societe_id)
{
    $filenameamount = $dir.'/proposalsamountinyear-'.$user->id.'-'.$year.'.png';
    $fileurlamount = DOL_URL_ROOT.'/viewimage.php?modulepart=propalstats&file=proposalsamountinyear-'.$user->id.'-'.$year.'.png';
}
else
{
    $filenameamount = $dir.'/proposalsamountinyear-'.$year.'.png';
    $fileurlamount = DOL_URL_ROOT.'/viewimage.php?modulepart=propalstats&file=proposalsamountinyear-'.$year.'.png';
}

$px2 = new DolGraph();
$mesg = $px2->isGraphKo();
if (! $mesg)
{
    $px2->SetData($data);
    $px2->SetPrecisionY(0);
    $i=$startyear;$legend=array();
    while ($i <= $endyear)
    {
        $legend[]=$i;
        $i++;
    }
    $px2->SetLegend($legend);
    $px2->SetMaxValue($px2->GetCeilMaxValue());
    $px2->SetMinValue(min(0,$px2->GetFloorMinValue()));
    $px2->SetWidth($WIDTH);
    $px2->SetHeight($HEIGHT);
    $px2->SetYLabel($langs->trans("AmountOfProposals"));
    $px2->SetShading(3);
    $px2->SetHorizTickIncrement(1);
    $px2->SetPrecisionY(0);
    $px2->mode='depth';
    $px2->SetTitle($langs->trans("AmountOfProposalsByMonthHT"));

    $px2->draw($filenameamount,$fileurlamount);
}

$data = $stats->getAverageByMonthWithPrevYear($endyear, $startyear);

$fileurl_avg='';
if (! isset($mode)) $mode=''; // TODO $mode not defined ?
if (!$user->rights->societe->client->voir || $user->societe_id)
{
    $filename_avg = $dir.'/ordersaverage-'.$user->id.'-'.$year.'.png';
    if ($mode == 'customer') $fileurl_avg = DOL_URL_ROOT.'/viewimage.php?modulepart=orderstats&file=ordersaverage-'.$user->id.'-'.$year.'.png';
    if ($mode == 'supplier') $fileurl_avg = DOL_URL_ROOT.'/viewimage.php?modulepart=orderstatssupplier&file=ordersaverage-'.$user->id.'-'.$year.'.png';
}
else
{
    $filename_avg = $dir.'/ordersaverage-'.$year.'.png';
    if ($mode == 'customer') $fileurl_avg = DOL_URL_ROOT.'/viewimage.php?modulepart=orderstats&file=ordersaverage-'.$year.'.png';
    if ($mode == 'supplier') $fileurl_avg = DOL_URL_ROOT.'/viewimage.php?modulepart=orderstatssupplier&file=ordersaverage-'.$year.'.png';
}

$px3 = new DolGraph();
$mesg = $px3->isGraphKo();
if (! $mesg)
{
    $px3->SetData($data);
    $i=$startyear;$legend=array();
    while ($i <= $endyear)
    {
        $legend[]=$i;
        $i++;
    }
    $px3->SetLegend($legend);
    $px3->SetYLabel($langs->trans("AmountAverage"));
    $px3->SetMaxValue($px3->GetCeilMaxValue());
    $px3->SetMinValue($px3->GetFloorMinValue());
    $px3->SetWidth($WIDTH);
    $px3->SetHeight($HEIGHT);
    $px3->SetShading(3);
    $px3->SetHorizTickIncrement(1);
    $px3->SetPrecisionY(0);
    $px3->mode='depth';
    $px3->SetTitle($langs->trans("AmountAverage"));

    $px3->draw($filename_avg,$fileurl_avg);
}


// Show array
$data = $stats->getAllByYear();
$arrayyears=array();
foreach($data as $val) {
	if (! empty($val['year'])) {
		$arrayyears[$val['year']]=$val['year'];
	}
}
if (! count($arrayyears)) $arrayyears[$nowyear]=$nowyear;


$h=0;
$head = array();
$head[$h][0] = DOL_URL_ROOT . '/comm/propal/stats/index.php';
$head[$h][1] = $langs->trans("ByMonthYear");
$head[$h][2] = 'byyear';
$h++;

$object=(object) array(); // TODO $object not defined ?
complete_head_from_modules($conf,$langs,$object,$head,$h,'propal_stats');

dol_fiche_head($head,'byyear',$langs->trans("Statistics"));

print '<table class="notopnoleftnopadd" width="100%"><tr>';
print '<td align="center" valign="top">';

//if (empty($socid))
//{
	// Show filter box
	print '<form name="stats" method="POST" action="'.$_SERVER["PHP_SELF"].'">';
	print '<input type="hidden" name="mode" value="'.$mode.'">';
	print '<table class="border" width="100%">';
	print '<tr><td class="liste_titre" colspan="2">'.$langs->trans("Filter").'</td></tr>';
	// Company
	print '<tr><td>'.$langs->trans("ThirdParty").'</td><td>';
	$filter='s.client in (1,2,3)';
	print $form->select_company($socid,'socid',$filter,1);
	print '</td></tr>';
	// User
//	print '<tr><td>'.$langs->trans("User").'/'.$langs->trans("SalesRepresentative").'</td><td>';
//	print $form->select_users($userid,'userid',1);
//	print '</td></tr>';
	// Year
	print '<tr><td>'.$langs->trans("Year").'</td><td>';
	if (! in_array($year,$arrayyears)) $arrayyears[$year]=$year;
	arsort($arrayyears);
	print $form->selectarray('year',$arrayyears,$year,0);
	print '</td></tr>';
	print '<tr><td align="center" colspan="2"><input type="submit" name="submit" class="button" value="'.$langs->trans("Refresh").'"></td></tr>';
	print '</table>';
	print '</form>';
	print '<br><br>';
//}

print '<table class="border" width="100%">';
print '<tr height="24">';
print '<td align="center">'.$langs->trans("Year").'</td>';
print '<td align="center">'.$langs->trans("NbOfProposals").'</td>';
print '<td align="center">'.$langs->trans("AmountTotal").'</td>';
print '<td align="center">'.$langs->trans("AmountAverage").'</td>';
print '</tr>';

$oldyear=0;
foreach ($data as $val)
{
    $year = $val['year'];
    //print $avg; // TODO $avg not defined ?
    while (! empty($year) && $oldyear > $year+1)
    {	// If we have empty year
        $oldyear--;
        print '<tr height="24">';
        print '<td align="center"><a href="'.$_SERVER["PHP_SELF"].'?year='.$oldyear.'&amp;mode='.$mode.'">'.$oldyear.'</a></td>';
        print '<td align="right">0</td>';
        print '<td align="right">0</td>';
        print '<td align="right">0</td>';
        print '</tr>';
    }
    print '<tr height="24">';
    print '<td align="center"><a href="'.$_SERVER["PHP_SELF"].'?year='.$year.'">'.$year.'</a></td>';
    print '<td align="right">'.$val['nb'].'</td>';
    print '<td align="right">'.price(price2num($val['total'],'MT'),1).'</td>';
    print '<td align="right">'.price(price2num($val['avg'],'MT'),1).'</td>';
    print '</tr>';
    $oldyear=$year;
}

print '</table>';


print '</td>';
print '<td align="center" valign="top">';

// Show graphs
print '<table class="border" width="100%"><tr valign="top"><td align="center">';
if ($mesg) { print $mesg; }
else {
    print $px1->show();
    print "<br>\n";
    print $px2->show();
    print "<br>\n";
    print $px3->show();
}
print '</td></tr></table>';

print '</td></tr></table>';

dol_fiche_end();


llxFooter();

$db->close();
?>