<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'title' => 'Upstream Exploration & Field Development',
                'slug' => 'upstream-exploration-field-development',
                'image' => 'assets/images/service/upstream-exploration.jpg',
                'summary' => 'Aurora Oil & Gas supports the full upstream lifecycle—from early-stage prospects to mature field development—using disciplined subsurface workflows and commercially grounded planning.',
                'description' => '<p>Aurora Oil & Gas provides upstream support that turns opportunities into executable development programs. We work with operators and asset owners to shape field concepts, reduce uncertainty, and strengthen investment decisions through robust technical interpretation and practical commercial thinking.</p>
                                <p>Our approach emphasizes basin and prospect screening, field development planning, and optimization studies that align reserves, facilities, and operating realities. From concept selection to development execution readiness, we help clients create plans that are technically sound, cost-aware, and built for regulatory and stakeholder expectations.</p>
                                <p>Where required, we coordinate multi-disciplinary inputs—subsurface, facilities, HSE, and logistics—so field plans are integrated, bankable, and ready to progress through internal approvals and external engagements.</p>',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Drilling, Workover & Well Services Support',
                'slug' => 'drilling-workover-well-services-support',
                'image' => 'assets/images/service/drilling-well-services.jpg',
                'summary' => 'We help operators deliver safer, more efficient wells through planning support, execution readiness, and operational coordination across drilling and workover activities.',
                'description' => '<p>Aurora Oil & Gas supports drilling and well intervention activities with an execution mindset—focused on safety, time efficiency, and well integrity. We assist teams in preparing operational programs that reduce non-productive time and strengthen control barriers from spud to completion and subsequent interventions.</p>
                                <p>Our services cover drilling and workover planning assistance, vendor coordination, and operational readiness, ensuring that equipment, people, procedures, and contingencies align before mobilization. During execution, we support real-time coordination and reporting so operations remain predictable, compliant, and performance-driven.</p>
                                <p>We also support well integrity assurance practices that prioritize barrier management, documentation, and lessons-learned integration—helping operators continuously improve future campaigns.</p>',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Well Engineering, Completions & Integrity Assurance',
                'slug' => 'well-engineering-completions-integrity-assurance',
                'image' => 'assets/images/service/well-completions-integrity.jpg',
                'summary' => 'From completion readiness to integrity assurance, we help clients maximize well performance while safeguarding long-term asset reliability.',
                'description' => '<p>Aurora Oil & Gas provides well engineering and completions support designed to improve production outcomes while maintaining strong integrity standards. We help clients plan completion strategies that match reservoir behavior, facilities constraints, and flow assurance realities.</p>
                                <p>Our support includes completions readiness, operational coordination, and integrity assurance documentation to ensure barrier philosophy, testing, and verification are consistently applied. This improves reliability across the well lifecycle and reduces the risk of integrity-related shutdowns or costly remedial operations.</p>
                                <p>We work closely with client teams and service providers to translate well objectives into practical execution steps—so the well is not only delivered, but delivered for sustained performance.</p>',
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Production Operations & Asset Optimization',
                'slug' => 'production-operations-asset-optimization',
                'image' => 'assets/images/service/production-optimization.jpg',
                'summary' => 'We support stable production through operating discipline, performance monitoring, and optimization initiatives that improve uptime, throughput, and cost efficiency.',
                'description' => '<p>Aurora Oil & Gas helps operators stabilize and grow production through structured operating support and optimization. We support production routines, surveillance, and performance reviews that identify constraints early and prioritize interventions that improve availability and throughput.</p>
                                <p>Our optimization approach focuses on practical gains—reducing downtime, improving operating parameters, strengthening maintenance planning, and supporting reliability-centered decisions. We assist in aligning production targets with facilities capacity and flow assurance constraints to deliver consistent outcomes.</p>
                                <p>By combining operational discipline with data-driven monitoring, we help clients improve production efficiency while maintaining safety and compliance expectations across assets.</p>',
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'title' => 'Midstream Pipeline, Terminal & Storage Support',
                'slug' => 'midstream-pipeline-terminal-storage-support',
                'image' => 'assets/images/service/midstream-pipelines-terminals.jpg',
                'summary' => 'Aurora provides operational and integrity-focused support for pipeline and terminal assets—helping clients improve reliability, reduce losses, and strengthen operational control.',
                'description' => '<p>Aurora Oil & Gas supports midstream operations with an emphasis on reliability, integrity, and operational discipline. We assist clients across pipeline and terminal environments to strengthen monitoring, operational readiness, and performance reporting.</p>
                                <p>We help develop practical integrity and operational routines that reduce leaks, unplanned downtime, and operational losses. Our support also includes documentation and coordination practices that enhance control, accountability, and compliance across multi-vendor environments.</p>
                                <p>Where required, we support interfaces between production, midstream, and export operations—ensuring flow continuity and operational alignment across the value chain.</p>',
                'is_active' => true,
                'sort_order' => 5,
            ],
            [
                'title' => 'HSE, Regulatory & Operational Governance',
                'slug' => 'hse-regulatory-operational-governance',
                'image' => 'assets/images/service/hse-regulatory-governance.jpg',
                'summary' => 'We strengthen safety culture and compliance through practical HSE support, documentation discipline, and operational governance that meets industry expectations.',
                'description' => '<p>Aurora Oil & Gas supports clients in building safer operations and stronger compliance performance through practical HSE and governance support. We help teams embed operational controls that reduce risk exposure while supporting productivity and execution reliability.</p>
                                <p>Our work supports the development and improvement of HSE processes, operational documentation discipline, incident learning workflows, and readiness practices that align people, procedures, and performance expectations. We also support compliance preparation for audits and stakeholder engagements.</p>
                                <p>The result is a governance approach that is implementable in real operating environments—improving safety outcomes, reducing disruptions, and building trust with regulators and stakeholders.</p>',
                'is_active' => true,
                'sort_order' => 6,
            ],
        ];


        foreach ($items as $data) {
            Service::updateOrCreate(
                ['slug' => $data['slug']], // unique key
                $data
            );
        }
    }
}
