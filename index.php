<!doctype html>
<html lang="en">
<?php include 'includes/header.php'; ?>
<body>

<div id="layout">
<?php include 'includes/sidemenu.php'; ?>
    <div id="main">
        <div class="header">
            <h1>FHIR based Tele Consultation Demo</h1>
            <h2>Power of Interoperability</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">How to use this?</h2>
            <p>
                To use this demo, open this website from two different devices. One of the device can act as TPO and other one as TSO
            </p>
<hr/>
<p></p>
<table class="pure-table pure-table-bordered">
    <thead>
        <tr>
            <th>TSO</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href = "create_tcon_form.php">Request for Tele Consultation</a></td>
        </tr>
        <tr>
            <td><a href = "view_patient_summary_form.php">View Patient Summary</a></td>
        </tr>
    </tbody>
</table>
<p></p>
<hr/>
<p></p>
<table class="pure-table pure-table-bordered">
    <thead>
        <tr>
            <th>TPO</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href = "create_tpo_acceptance_form.php">Accept Tele Consultation Request</a></td>
        </tr>
        <tr>
            <td><a href = "create_tpo_telehealth_complete_form.php">Complete Tele Consultation Request</a></td>
        </tr>
    </tbody>
</table>
<p></p>
<hr/>
<p></p>
<table class="pure-table pure-table-bordered">
    <thead>
        <tr>
            <th>ADMIN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href = "create_tso_org_form.php">Create TSO</a></td>
        </tr>
        <tr>
            <td><a href = "create_tpo_org_form.php">Create TPO</a></td>
        </tr>
    </tbody>
</table>
        </div>
    </div>
</div>

<script src="js/ui.js"></script>

</body>
</html>
