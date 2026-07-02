<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'Track Your Consignment', 'breadcrumb_icon' => 'bi-search')); ?>

<div class="container py-5">
    <div class="row">

        <div class="col-lg-12 d-flex justify-content-center align-items-center">
            <div class="contact-tracking-form mb-3 w-100">
                <form action="" id="tracking_form">
                    <label for="trackingNumber" class="form-label fw-bold">Enter Tracking Number</label>
                    <input type="text" class="form-control" id="trackingNumber" name="trackingNumber"
                        placeholder="123456">
                    <div id="statusMessage" class="mt-2"></div>
                    <button class="btn btn-success mt-3 me-2" id="tracking_submit">Submit</button>
                    <button type="reset" class="btn btn-danger mt-3">Clear</button>
                </form>

                <div class="contact-tracking-details-card mt-4">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">Tracking Details</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-2 contact-track-details-flex">
                                    <p><span class="contact-tracking-label">Customer Name: </span></p>
                                    <p id="customerName">
                                    </p>
                                </div>
                                <div class="col-md-2 contact-track-details-flex">
                                    <p><span class="contact-tracking-label">LR NO.: </span></p>
                                    <p id="lrNumber"></p>
                                </div>
                                <div class="col-md-2 contact-track-details-flex">
                                    <p><span class="contact-tracking-label">Shipment Type: </span></p>
                                    <p id="shipmentType"></p>
                                </div>
                                <div class="col-md-2 contact-track-details-flex">
                                    <p><span class="contact-tracking-label">ORIGIN: </span></p>
                                    <p id="origin"></p>
                                </div>
                                <div class="col-md-2 contact-track-details-flex">
                                    <p><span class="contact-tracking-label">DESTINATION: </span></p>
                                    <p id="destination"></p>
                                </div>
                                <div class="col-md-2 contact-track-details-flex">
                                    <p><span class="contact-tracking-label">Expected Delivery Date: </span></p>

                                    <span id="ex_del_date"></span> <i class="fa-solid fa-circle-check contact-tracking-success"></i>
                                </div>
                            </div>

                            <div class="contact-tracking-progress mb-4">
                                <div class="contact-progress-bar-container">
                                    <div class="contact-progress">
                                        <div class="contact-progress-bar" role="progressbar"></div>
                                    </div>
                                    <div class="contact-progress-steps">
                                        <div class="contact-step step-processing">
                                            <div class="contact-step-icon">1</div>
                                            <div class="contact-step-label">Process</div>
                                            <div class="contact-step-date" id="processing-date"></div>
                                        </div>
                                        <div class="contact-step step-picked">
                                            <div class="contact-step-icon">2</div>
                                            <div class="contact-step-label">Picked</div>
                                            <div class="contact-step-date" id="picked-date"></div>
                                        </div>
                                        <div class="contact-step step-transit">
                                            <div class="contact-step-icon">3</div>
                                            <div class="contact-step-label">In Transit</div>
                                            <div class="contact-step-date" id="transit-date"></div>
                                        </div>
                                        <div class="contact-step step-delivered">
                                            <div class="contact-step-icon">4</div>
                                            <div class="contact-step-label">Delivered</div>
                                            <div class="contact-step-date" id="delivered-date"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-tracking-table mt-4">
                                <h6 class="border-bottom pb-2">TRACKING HISTORY</h6>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="table-light">
                                            <tr>
                                                <th>STATUS</th>
                                                <th>DATE</th>
                                                <th>EVENT</th>
                                            </tr>
                                        </thead>
                                        <tbody id="trackingTableBody">

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="mt-4">
                                <p class="text-muted">For more details, Please call <a
                                        class="contact-tracking-link"
                                        href="<?= $primaryPhonehtml ?> ">
                                        <?= $phone ?>
                                    </a> or leave
                                    your
                                    <a class="contact-tracking-underline" href="<?= site_url('contacts') ?>">contact
                                        number / email
                                        id</a> and our representative will contact you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        const steps = {
            '1': 'Processing',
            '2': 'Picked',
            '3': 'In Transit',
            '4': 'Delivered',
        };

        $('#tracking_submit').click(function (e) {
            e.preventDefault();
            $('#statusMessage').html('<div class="alert alert-info">Please wait...</div>');
            $(this).prop('disabled', true);

            $.post("<?php echo base_url('contacts/tracking') ?>", $("#tracking_form").serialize(), function (
                response) {
                $('#tracking_submit').prop('disabled', false);
                $('#trackingTableBody').empty();

                if (response.status === 'success') {
                    // Show details section
                    $('.contact-tracking-details-card').show();

                    // Populate details
                    $('#customerName').text(response.main.c_name);
                    $('#lrNumber').text(response.main.tracking_id);
                    $('#shipmentType').text(response.main.ship_type);
                    $('#origin').text(response.main.ship_from);
                    $('#destination').text(response.main.ship_to);
                    $('#ex_del_date').text(response.main.ex_del_date);

                    // Build map of fetched steps
                    const received = {};
                    if (Array.isArray(response.timeline)) {
                        response.timeline.forEach(item => {
                            received[item.type.toString()] = item;
                        });
                    }

                    // Update progress bar and steps
                    let progress = 0;
                    let activeStep = 0;

                    if (received['1']) {
                        progress = 25;
                        activeStep = 1;
                        $('.step-processing').addClass('completed');
                        $('#processing-date').text(received['1'].date);
                    }

                    if (received['2']) {
                        progress = 50;
                        activeStep = 2;
                        $('.step-picked').addClass('completed');
                        $('#picked-date').text(received['2'].date);
                    }

                    if (received['3']) {
                        progress = 75;
                        activeStep = 3;
                        $('.step-transit').addClass('completed');
                        $('#transit-date').text(received['3'].date);
                    }

                    if (received['4']) {
                        progress = 100;
                        activeStep = 4;
                        $('.step-delivered').addClass('completed');
                        $('#delivered-date').text(received['4'].date);
                    }

                    // Set active step
                    $(`.contact-step:nth-child(${activeStep})`).addClass('active');

                    // Update progress bar width
                    $('.contact-progress-bar').css('width', progress + '%');

                    // Build tracking table
                    if (Array.isArray(response.timeline)) {
                        response.timeline.forEach(item => {
                            $('#trackingTableBody').append(`
                                <tr>
                                    <td>${steps[item.type]}</td>
                                    <td>${item.date}</td>
                                    <td>${item.remarks}</td>
                                </tr>
                            `);
                        });
                    }

                    $('#statusMessage').empty();
                } else {
                    // Error: hide details, show message
                    $('.contact-tracking-details-card').hide();
                    $('#statusMessage').html(
                        `<div class="alert alert-danger">${response.message}</div>`);
                }
            }, 'json');
        });

        // Clear resets everything
        $('button[type="reset"]').click(function () {
            $('#statusMessage').empty();
            $('.contact-tracking-details-card').hide();
            $('.contact-step').removeClass('active completed');
            $('.contact-progress-bar').css('width', '0%');
            $('#gcNumber, #origin, #destination, #ex_del_date, #processing-date, #picked-date, #transit-date, #delivered-date')
                .text('');
            $('#trackingTableBody').empty();
        });
    });
</script>

