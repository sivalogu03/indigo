<!-- FAQ Section Start -->
<section class="faq-page-wrapper py-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="section-title">
                    <h3 class="wow fadeInUp">Indigo Interiors</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Frequently Asked <span>Questions</span></h2>
                    <p class="mt-4 wow fadeInUp" data-wow-delay="0.2s">
                        At <strong>Indigo Interiors</strong>, we have put together a detailed list of Frequently Asked Questions to help homeowners and businesses understand our interior design process, pricing, materials, and services. These FAQs make it easier for you to make informed decisions before starting your dream interior project with us.
                    </p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="faq-accordion" id="faqPageAccordion">

                    <?php
                    $faqs = [
                        [
                            "q" => "Why is Indigo Interiors considered the best interior design company?",
                            "a" => "Indigo Interiors is known for its creative designs, high-quality materials, timely delivery, and customer-focused approach, making it a trusted choice for home and commercial interiors."
                        ],
                        [
                            "q" => "What types of interior design services does Indigo Interiors offer?",
                            "a" => "They offer complete home interiors, modular kitchens, wardrobes, living room design, bedroom design, office interiors, space planning, and custom furniture solutions."
                        ],
                        [
                            "q" => "Does Indigo Interiors provide 3D design before execution?",
                            "a" => "Yes, we provide detailed 3D visualizations so you can see exactly how your dream home will look before we start the on-site work."
                        ],
                        [
                            "q" => "How much does Indigo Interiors charge for interior design?",
                            "a" => "Pricing depends on the home size, materials, design style, and customization level. They offer both affordable modular packages and premium turnkey solutions."
                        ],
                        [
                            "q" => "Does Indigo Interiors handle both design and execution?",
                            "a" => "Yes, they provide end-to-end services including design, material selection, manufacturing, installation, and complete project management."
                        ],
                        [
                            "q" => "How long does an interior project with Indigo Interiors take?",
                            "a" => "A typical project takes 30–60 days depending on scope and customization. They are known for delivering within committed timelines."
                        ],
                        [
                            "q" => "Can Indigo Interiors work with my existing furniture or layout?",
                            "a" => "Yes, they can blend your existing furniture into the new design and optimize the layout to enhance space and aesthetics."
                        ],
                        [
                            "q" => "Are Indigo Interiors' materials durable and long-lasting?",
                            "a" => "They use high-quality materials like BWR plywood, branded laminates, reliable hardware, and certified finishes to ensure durability and long-term performance."
                        ],
                        [
                            "q" => "Does Indigo Interiors offer warranty on interiors?",
                            "a" => "Yes, they provide warranty on modular products, hardware, and installation, ensuring peace of mind for homeowners."
                        ],
                        [
                            "q" => "Can Indigo Interiors customize interiors based on my budget?",
                            "a" => "Absolutely. They offer flexible design options and material choices to suit different budgets without compromising on style and quality."
                        ]
                    ];

                    foreach ($faqs as $index => $faq):
                        $count = $index + 1;
                        $is_first = ($index === 0) ? 'show' : '';
                        $collapsed = ($index === 0) ? '' : 'collapsed';
                    ?>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="<?php echo ($index * 0.1); ?>s">
                            <h2 class="accordion-header" id="heading<?php echo $count; ?>">
                                <button class="accordion-button <?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $count; ?>" aria-expanded="<?php echo ($index === 0 ? 'true' : 'false'); ?>" aria-controls="collapse<?php echo $count; ?>">
                                    <span><?php echo $count; ?>.</span> <?php echo $faq['q']; ?>
                                </button>
                            </h2>
                            <div id="collapse<?php echo $count; ?>" class="accordion-collapse collapse <?php echo $is_first; ?>" aria-labelledby="heading<?php echo $count; ?>" data-bs-parent="#faqPageAccordion">
                                <div class="accordion-body">
                                    <p><?php echo $faq['a']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ Section End -->
