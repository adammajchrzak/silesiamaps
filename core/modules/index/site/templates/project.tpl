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
        {if unity_name != ''}
        <tr>{if unity_name != ''}
            <td>Jednostka realizujca PL</td>
            <td>{$details.unity_name}</td>
        </tr>
        {/if}
        <tr>
            <td>Partnerzy projektu</td>
            <td>
                Partner CZ: <strong>{$details.partner_cz}</strong><br/>
                Partner PL: <strong>{$details.partner_pl}</strong>
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
    <h2>Opis projektu</h2>    
        {$details.project_description}
        <h3>Opis zrealizowanych działań</h3>
        {$details.project_report}
        
        <h3>Efekty projektu/produkty projektu - zrealizowane</h3>
        {$details.project_effect}
        <h3>Strona www projektu</h3>
        {$details.project_www}
        <h3>Koordynator projektu + kontakt</h3>
</div>