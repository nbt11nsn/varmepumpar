<?php
require_once('phposm.class');
exit;

/* Remember; 
 * By default the class is configured to talk to the SANDBOX where you will not have
 * an account until you make it. http://api06.dev.openstreetmap.org/
 */


/* Howto use */

/* To fetch an object from the API you use the osm class */
$osm = new osm();

/* If we watch to delete or update a node or a way we have to fetch this object first */
$todelete = $osm->getWay(1);


/* In order to commit changes we can start a changeset, in auto-commit, or in one transaction
 * for structural integrety the atomic method (true) is preferred
 */
$changeset = new changeset('username', 'password', false);

/* Lets make some tags */
$tags = array();
$changeset->addTag($tags, 'created_by', 'Me');

/* Lets create a quick and simple Changeset */
$changesetid = $changeset->simpleCreate($tags);

/* Ok; what is our changesetid */
echo $changesetid;

/* Since we have to update the changeset (and version for updates) an XML parser can be handy */ 
$xml = new SimpleXMLElement($todelete);
$xml->way['changeset'] = $changesetid;
// $xml->way['version']++;
// print_r($xml);

/* Render the structure back to XML */
$todelete = $xml->way->asXML();
// echo $todelete;

/* Now we can use the deleteWay or updateWay function to change an existing way */
$changeset->deleteWay(49719, $todelete);


/* Some other examples; */

/* Creating a new node, way and relation */

$members = array();
$nodes = array();
$nodes[] = $changeset->simpleNodeCreate(0.0,0.0,$tags);

$changeset->addMember($members, 'node', $nodes[0]);

$way = $changeset->simpleWayCreate($nodes, $tags);

$changeset->addMember($members, 'way', $way, '');

$changeset->simpleRelationCreate($members, $tags);



/* This would commit our changeset, or just close it */
$changeset->close();
?>
