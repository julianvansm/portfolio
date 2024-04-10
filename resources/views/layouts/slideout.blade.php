
<div id="fullpageblur" >
    <a id="navblurclose"  href="javascript:void(0)"  onclick="closeNav()"></a>
</div>

    <div id="mySidenav" class="sidenav">
        <div id="sidenavborder">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="texthider" id="texthider">
                <a href="#Home" onclick="closeNav()">&#127968;Home</a>
                <a href="#About" onclick="closeNav()">&#128214;@if($lanset === 'NL') Introductie @else About @endif </a>
                <a href="#Projects" onclick="closeNav()">&#10004;&#65039;@if($lanset === 'NL') Projecten @else Projects @endif </a>
            </div>
        </div>


    </div>
        <span class="navbutton" onclick="openNav()">&#9776;</span>
        <span class="blurredexit"></span>

