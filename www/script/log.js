Log("log.php");

function Log(logUrl)
{
    var xmlHttp = null;

    xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", logUrl, false );
    xmlHttp.send( null );
}
