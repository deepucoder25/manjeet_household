<?php
$htmlcontent = '';
$htmlcontent1 = '';
$htmlcontent2 = '';

if (strtolower($city) == "") {
   $htmlcontent = "";
   $htmlcontent1 = "";
   $htmlcontent2 = "";
} else {
   $htmlcontent = "
     <p>
       Planning a move in <strong>$city</strong>? Here's what you need to know. Traffic delays, society timing rules, narrow lanes, and sudden weather shifts can turn a simple house shifting process into a stressful ordeal. That's where <strong>$company3</strong> step in. We have been facilitating household relocation, office shifting, vehicle transport, and local moving in <strong>$city</strong> with trained crews, premium packing techniques, and well-planned logistics coordinates.
     </p>
     <p>
       Families searching for <strong>Top Packers and Movers in $city</strong> want two main guarantees — safety of their valuables and timely execution. We eliminate double handling, broken furniture, and delivery delays by managing every step with professional excellence.
     </p>
   ";

   $htmlcontent1 = "
     <div class='pm-city-prose-card'>
       <h4 class='fw-bold text-dark fs-6 mb-2'>Solving Shifting Challenges in $city</h4>
       <p>
         Relocation in <strong>$city</strong> comes with unique local considerations. High-rise apartment societies often enforce strict timing restrictions, lift usage guidelines, and entry permissions for moving trucks. Delays can also occur due to heavy traffic on busy city corridors or narrow residential roads.
       </p>
       <p>
         That's why hiring a local shifting specialist is crucial. We prepare in advance by selecting the right truck size, securing entry approvals, and scheduling packing at optimal hours to ensure a seamless door-to-door shifting experience.
       </p>
     </div>
   ";

   $htmlcontent2 = "
     <div class='pm-city-prose-card mt-3'>
       <h4 class='fw-bold text-dark fs-6 mb-2'>Comprehensive Shifting Services Available</h4>
       <p>
         We manage diverse shifting services to meet every customer requirement:
       </p>
       <ul class='list-unstyled d-flex flex-column gap-2 mb-3'>
         <li class='d-flex align-items-start gap-2'><i class='bi bi-patch-check-fill text-danger fs-6 mt-1'></i> <span><strong>Household Shifting:</strong> Safe packaging and transport of furniture, electronics, and kitchenware.</span></li>
         <li class='d-flex align-items-start gap-2'><i class='bi bi-patch-check-fill text-danger fs-6 mt-1'></i> <span><strong>Office Relocation:</strong> Careful packing of servers, IT systems, office files, and modular partitions.</span></li>
         <li class='d-flex align-items-start gap-2'><i class='bi bi-patch-check-fill text-danger fs-6 mt-1'></i> <span><strong>Vehicle Carrier Support:</strong> Specialized car and bike carriers for zero-scratch transportation.</span></li>
         <li class='d-flex align-items-start gap-2'><i class='bi bi-patch-check-fill text-danger fs-6 mt-1'></i> <span><strong>Loading &amp; Unloading:</strong> Heavy loading equipment and safety belts handled by experienced professionals.</span></li>
       </ul>
       <p>
         With transparent moving quotes, zero hidden charges, and dedicated customer support, we are your trusted partners for local and domestic shifting in <strong>$city</strong>.
       </p>
     </div>
   ";
}
?>