function panel(evt, Panel)
{
    let i;
    let tabcontent;
    let tablinks;
    tabcontent = document.getElementsByClassName("container-fluid");
    for(i = 0; i < tabcontent.length; i++)
    {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for(i = 0; i < tablinks.length; i++)
    {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(Panel).style.display = "block";
    evt.currentTarget.className += " active";
}