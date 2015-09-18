<div id="page-content">
    <h2>{$details.project_title|upper}</h2>
    <h3>Numer projektu: {$details.project_number}</h3>
    <table class="projectDetails" cellspacing="0">
        <tr>
            <td>Program</td>
            <td><strong>{$details.project_program}</strong></td>
        </tr>
        <tr>
            <td>Priorytet</td>
            <td>{$details.project_id}</td>
        </tr>
        <tr>
            <td>Dziedzina wsparcia/temat</td>
            <td>{$details.topic_id}</td>
        </tr>
        <tr>
            <td>Czas trwania</td>
            <td>
                Termin roczpoczęcia: <strong>{$details._start}</strong><br/>
                Termin zakończenia: <strong>{$details._end}</strong></td>
        </tr>
        <tr>
            <td>Beneficjent PL</td>
            <td><strong>{$details.beneficiary}</strong></td>
        </tr>
        {if $details.unity_name != ''}
            <tr>
                <td>Jednostka realizujca PL</td>
                <td>{$details.unity_name}</td>
            </tr>
        {/if}
        <tr>
            <td>Partnerzy projektu</td>
            <td>
                {if $details.partner_cz != ''}
                    Partner CZ: <strong>{$details.partner_cz}</strong><br/>
                {/if}
                {if $details.partner_pl != ''}
                    Partner PL: <strong>{$details.partner_pl}</strong>
                {/if}
            </td>
        </tr>
    </table>

    <h2>Finansowanie - budżet &euro;</h2>        
    <table class="projectDetails" cellspacing="0" style="margin: auto;">
        <tr>
            <td>
                <strong>Budżet planowany</strong><br/>
                (zgodnie z decyzją EKS - kwota całkowita)
            </td>
            <td><strong>{$details.budget_full}</strong></td>
        </tr>
        <tr>
            <td>
                <strong>Planowane dofinansowanie</strong><br/>
                (zgodnie z decyzją EKS - kwota z EFRR)
            </td>
            <td><strong>{$details.budget_grant}</strong></td>
        </tr>
        <tr>
            <td>
                <strong>Budżet wykonany</strong><br/>
                (zgodnie z zatwierdzonym Wnioskiem o płatność - kwota całkowita)
            </td>
            <td><strong>{$details.budget_done}</strong></td>
        </tr>
        <tr>
            <td>
                <strong>Dofinansowanie dla projektu z EFRR</strong><br/>
                (zgodnie z zatwierdzonym Wnioskiem o płatność)
            </td>
            <td><strong>{$details.budget_efrr}</strong></td>
        </tr>
    </table>
    <div class="project-gallery">
        <ul id="lightgallery">
            {foreach $gallery as $item}
                <li data-src="{$item.file_dir}/big/{$item.file_name}">
                    <a href="">
                        <img src="{$item.file_dir}/big/{$item.file_name}" />
                    </a>
                </li>
            {/foreach}    
        </ul>   
    </div>
    <div style="clear: both;"></div>    
    <h2>Opis projektu</h2>    
    {$details.project_description}
    <h3>Opis zrealizowanych działań</h3>
    {$details.project_report}

    <h3>Efekty projektu/produkty projektu - zrealizowane</h3>
    {$details.project_effect}
    <h3>Strona www projektu</h3>
    {$details.project_www}
    <h3>Koordynator projektu + kontakt</h3>
    {$details.project_coordinator}
</div>





<script type="text/javascript">
    $(document).ready(function () {
        $("#lightgallery").lightGallery();
    });
</script>


<style type="text/css">
    .project-gallery > ul {
        list-style: none;
        margin-bottom: 0;
    }
    .project-gallery > ul > li {
        float: left;
        margin-bottom: 15px;
        margin-right: 20px;
        width: 200px;
    }
    .project-gallery > ul > li a {
        border: 3px solid #ffffff;
        border-radius: 3px;
        display: block;
        overflow: hidden;
        position: relative;
        float: left;
    }
    .project-gallery > ul > li a > img {
        -webkit-transition: -webkit-transform 0.15s ease 0s;
        -moz-transition: -moz-transform 0.15s ease 0s;
        -o-transition: -o-transform 0.15s ease 0s;
        transition: transform 0.15s ease 0s;
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
        height: 100%;
        width: 100%;
    }
    .project-gallery > ul > li a:hover > img {
        -webkit-transform: scale3d(1.1, 1.1, 1.1);
        transform: scale3d(1.1, 1.1, 1.1);
    }
    .project-gallery > ul > li a:hover .project-gallery-poster > img {
        opacity: 1;
    }
    .project-gallery > ul > li a .project-gallery-poster {
        background-color: rgba(0, 0, 0, 0.1);
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        -webkit-transition: background-color 0.15s ease 0s;
        -o-transition: background-color 0.15s ease 0s;
        transition: background-color 0.15s ease 0s;
    }
    .project-gallery > ul > li a .project-gallery-poster > img {
        left: 50%;
        margin-left: -10px;
        margin-top: -10px;
        opacity: 0;
        position: absolute;
        top: 50%;
        -webkit-transition: opacity 0.3s ease 0s;
        -o-transition: opacity 0.3s ease 0s;
        transition: opacity 0.3s ease 0s;
    }
    .project-gallery > ul > li a:hover .project-gallery-poster {
        background-color: rgba(0, 0, 0, 0.5);
    }
    .project-gallery .justified-gallery > a > img {
        -webkit-transition: -webkit-transform 0.15s ease 0s;
        -moz-transition: -moz-transform 0.15s ease 0s;
        -o-transition: -o-transform 0.15s ease 0s;
        transition: transform 0.15s ease 0s;
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
        height: 100%;
        width: 100%;
    }
    .project-gallery .justified-gallery > a:hover > img {
        -webkit-transform: scale3d(1.1, 1.1, 1.1);
        transform: scale3d(1.1, 1.1, 1.1);
    }
    .project-gallery .justified-gallery > a:hover .project-gallery-poster > img {
        opacity: 1;
    }
    .project-gallery .justified-gallery > a .project-gallery-poster {
        background-color: rgba(0, 0, 0, 0.1);
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        -webkit-transition: background-color 0.15s ease 0s;
        -o-transition: background-color 0.15s ease 0s;
        transition: background-color 0.15s ease 0s;
    }
    .project-gallery .justified-gallery > a .project-gallery-poster > img {
        left: 50%;
        margin-left: -10px;
        margin-top: -10px;
        opacity: 0;
        position: absolute;
        top: 50%;
        -webkit-transition: opacity 0.3s ease 0s;
        -o-transition: opacity 0.3s ease 0s;
        transition: opacity 0.3s ease 0s;
    }
    .project-gallery .justified-gallery > a:hover .project-gallery-poster {
        background-color: rgba(0, 0, 0, 0.5);
    }
    .project-gallery .video .project-gallery-poster img {
        height: 48px;
        margin-left: -24px;
        margin-top: -24px;
        opacity: 0.8;
        width: 48px;
    }
    .project-gallery.dark > ul > li a {
        border: 3px solid #04070a;
    }
    .home .project-gallery {
        padding-bottom: 80px;
    }
</style>

