<?php
// Single source of truth for the six service detail pages. Each page
// (e.g. corporate-advisory.php) sets $serviceSlug and includes
// service-details.php, which renders from this data.
//
// `fields` mirror the sub-offerings shown for each service on the homepage.

$serviceDetails = [
    'corporate-advisory' => [
        'title' => 'Corporate Advisory',
        'meta'  => 'Corporate advisory in Dubai — business structuring, governance, performance and strategic decision support from Bluesky Advisors DMCC.',
        'lead'  => 'Our corporate advisory practice helps businesses build the right structure, governance and performance discipline to grow with confidence.',
        'body'  => 'From how your company is organised to how decisions get made and reported, we work alongside owners and leadership teams to turn strategy into measurable results — whether you are setting up in the UAE, restructuring an existing group, or sharpening day-to-day management.',
        'fields' => [
            'Business Structuring &amp; Corporate Planning',
            'Corporate Governance &amp; Management Support',
            'Operational Improvement &amp; Process Advisory',
            'Business Performance &amp; KPI Advisory',
            'Stakeholder &amp; Management Reporting',
            'Strategic Decision Support',
        ],
    ],
    'transaction-advisory' => [
        'title' => 'Transaction Advisory',
        'meta'  => 'Transaction advisory in Dubai — feasibility, due diligence, valuation and deal support from Bluesky Advisors DMCC.',
        'lead'  => 'We support businesses and investors through every stage of a transaction — from evaluating whether a deal makes sense to closing it and integrating afterwards.',
        'body'  => 'Acquisitions, investments, joint ventures and exits all carry risk. Our team brings rigour to feasibility, due diligence and valuation so you understand exactly what you are buying or selling, structure the deal sensibly, and protect value once it closes.',
        'fields' => [
            'Investment Feasibility &amp; Deal Evaluation',
            'Financial &amp; Operational Due Diligence',
            'Transaction Structuring &amp; Valuation Support',
            'Joint Venture &amp; Partnership Advisory',
            'Investor Presentation &amp; Deal Support',
            'Post-Transaction Integration Support',
        ],
    ],
    'real-estate-advisory' => [
        'title' => 'Real Estate Advisory',
        'meta'  => 'Real estate advisory in Dubai — feasibility, development planning, portfolio optimisation and execution oversight from Bluesky Advisors DMCC.',
        'lead'  => 'Real estate decisions are capital-intensive and long-term, so they deserve careful analysis before capital is committed.',
        'body'  => 'We help developers, investors and owners assess feasibility, plan developments and optimise portfolios — combining financial analysis with on-the-ground sector insight across Dubai and the wider region, from early market studies through to execution oversight.',
        'fields' => [
            'Real Estate Feasibility &amp; Market Studies',
            'Development Planning &amp; Investment Analysis',
            'Portfolio Review &amp; Asset Optimization',
            'Development Cost Planning',
            'Project Execution Oversight',
            'Real Estate Research &amp; Sector Insights',
        ],
    ],
    'growth-advisory' => [
        'title' => 'Growth Advisory',
        'meta'  => 'Growth advisory in Dubai — market entry, scaling, commercial strategy and business transformation from Bluesky Advisors DMCC.',
        'lead'  => 'Growth rarely happens by accident — it takes a deliberate, funded and well-sequenced plan.',
        'body'  => 'We help businesses enter new markets, scale operations and sharpen commercial strategy. Whether you are entering the UAE for the first time or scaling an established company, we build a clear path to revenue and the partnerships and transformation needed to deliver it.',
        'fields' => [
            'Market Entry &amp; Expansion Strategy',
            'Business Growth &amp; Scaling Advisory',
            'Commercial Strategy Development',
            'Revenue Enhancement Initiatives',
            'Strategic Partnerships &amp; Alliances',
            'Business Transformation Support',
        ],
    ],
    'it-advisory' => [
        'title' => 'IT Advisory',
        'meta'  => 'IT advisory in Dubai — digital transformation, data strategy, automation and IT governance from Bluesky Advisors DMCC.',
        'lead'  => 'Technology should make your business faster, not more complicated.',
        'body'  => 'We help organisations set IT strategy, put their data to work, and automate the processes that slow teams down — with the right governance and controls in place. Our focus is practical digital transformation: assessing what you have, fixing what holds you back, and giving leadership clear dashboards to run the business by.',
        'fields' => [
            'Digital Transformation &amp; IT Strategy',
            'Data Strategy &amp; Information Management',
            'Business Process Automation',
            'Technology Infrastructure Assessment',
            'IT Governance &amp; Controls',
            'Performance Dashboards &amp; Reporting Solutions',
        ],
    ],
    'hr-advisory' => [
        'title' => 'HR Advisory',
        'meta'  => 'HR advisory in Dubai — organisational design, talent, reward and HR transformation from Bluesky Advisors DMCC.',
        'lead'  => 'Your people are your biggest asset, and often your biggest cost.',
        'body'  => 'We help businesses design the right organisation, attract and retain talent, and build the policies, leadership and reward structures that let teams perform — from workforce planning through to full HR transformation and change management.',
        'fields' => [
            'Organizational Design &amp; Workforce Planning',
            'HR Policies &amp; Process Advisory',
            'Talent Acquisition &amp; Retention Strategy',
            'Compensation &amp; Benefits Structuring',
            'Leadership &amp; Capability Development',
            'HR Transformation &amp; Change Management',
        ],
    ],
];

// Shared across every service page.
$serviceWhyChoose = [
    'Senior, hands-on advisors — you work directly with experienced people',
    'Practical, decision-ready advice grounded in real business outcomes',
    'Dubai-based and regionally focused, with a clear view of the UAE market',
    'One integrated partner across corporate, transaction, growth, IT and HR',
];

$serviceFaqs = [
    [
        'q' => 'How do engagements with Bluesky Advisors work?',
        'a' => 'Every engagement starts with a conversation to understand your goals, followed by a clear scope and written agreement before any work begins. We tailor the team and approach to the size and stage of your business.',
    ],
    [
        'q' => 'Which businesses do you work with?',
        'a' => 'We work with founders, family businesses, established companies and investors across the UAE and the wider region — from those setting up to those planning their next phase of growth.',
    ],
    [
        'q' => 'How do I get started?',
        'a' => 'Email contact@bluesky-advisors.com or use our contact form to arrange an introductory discussion. We will talk through your situation and how we can help.',
    ],
];
