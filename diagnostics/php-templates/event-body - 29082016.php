<?php
/*$page = file_get_contents("http://medgenome.com/featured-event/");
$html_entities = htmlentities(file_get_contents("http://medgenome.com/featured-event/"));

//preg_match('/<h3>(.*?)<\/h3>/s', $html_entities, $matches);
//print_r($matches[1]);

//$str='<h3 class=" ">STRING IN QUESTION</h3>';
preg_match_all('/<h3.*?>(.*?)<\/h3>/',$html_entities,$match);
print_r($match);

exit;*/
$title = [
	"4th Annual Immuno-Oncology Summit",
	"CRI-CIMT-EATI-AACR INTERNATIONAL CANCER IMMUNOTHERAPY CONFERENCE",
	"2nd International Conference on Eye and Vision",
	"ASHG 2016",
	"AACR Tumor Immunology & Immunotherapy",
	"31st Annual Meeting & Associated Programs, SITC",
	"Society for Neuroscience",
	"Neoantigen Summit 2016",
	"The 58th American Society of Hematology Annual Meeting and Exposition",
	"39th San Antonio Breast Cancer Symposium",
	"World’s Premier Conference on Computational Biology – ISMB 2016",
	"World Preclinical Congress (WPC)",
	"ASCO Annual Meeting",
	"Big Data Bioinformatics conference",
	"The EUROPEAN HUMAN GENETICS CONFERENCE 2016",
	"Biomarkers & Diagnostics World Congress 2016",
	"The Cancer Immunotherapy Congress",
	"Diabetes Summit 2016",
	"Meet us at booth number 2436 at the AACR Annual Meeting, 2016",
	"Molecular Med TRI-CON, 2016",
	"NGS Data Analysis and Informatics Conference",
	"Advances in Genome Biology and Technology (AGBT) General Meeting",
	"Novel Immunotherapeutics Summit, 2016",
	"Functional Genomics Symposium",
	"Symposium on Mass Array Technology & its Applications – Organised by Imperial Life sciences and MedGenome",
	"The 11th Scientific Workshop of the ICGC",
	"MedGenome participating at APCON 2015, Kochi",
	"MedGenome Inc. is at the EMBL Conference on Cancer Genomics from 1st to 4th November, 2015",
	"MedGenome Inc. is at the SITC’s 30th Anniversary Annual Meeting & Associated Programs from 4th to 8th November, 2015",
	"Largest Simultaneous Self-Examination for Breast Cancer in India",
	"2015 NextGen Genomics, Biology, Bioinformatics and Technologies (NGBT) Conference",
	"The 2nd Precision Medicine Congress 2015",
	"CRI-CIMT-EATI-AACR – The Inaugural International Cancer Immunotherapy Conference: Translating Science into Survival",
	"MedGenome Inc. is at the 13th Annual Discovery on Target event at Boston, MA from 21st to 24th September, 2015",
	"Meet us at booth number 416 at the European Cancer Congress 2015",
	"Genomics-based decision making towards precision medicine",
	"Multi Gene Panel Testing for Inherited Cardiovascular Diseases",
	"Next Generation Sequencing in Diagnostics-Hope or Hype",
	"Genetic Tests in Neurological Disorder",
	"MedGenome is proud to be associated with Symposium on Genetic Diseases: From Mendelian to Malignancies",
	"MedGenome is proud to sponsor a mini-symposium on Genomics in Hematology",
	"Child Neurology Group Meet",
	"The World’s First Genomics Festival",
	"The 2015 New York Venture Summit",
	"Meet us at booth number 5202 at the 2015 BIO International Convention",
	"MedGenome Inc. is at the 75th Scientific Sessions of the American Diabetes Association (ADA) at Boston, MA from 5th to 9th June, 2015",
	"Meet us at booth number 4018 at the ASCO Annual Meeting 2015 – Illumination & Innovation",
	"Symposium on Clinical Genomics of Renal, Cardiovascular and Neurological Disorders",
	"Conference on Vitreo-Macular Problems (VIP-II)",
	"Meet us at booth number 1659 at the AACR Annual Meeting 2015",
	"2015 AGBT Meeting",
	"Meet us at Booth No. 1243 at the Association For Molecular Pathology (AMP) 2014 Annual Meeting and 20th Anniversary Celebration",
	"Meet us at Booth No.137 at ASHG, San Diego",
	"NextGen Genomics & Bioinformatics Technologies (NGBT) Conference",
	"Pre-Conference NGS Bioinformatics Workshop"
];
$left_title = [
	"4th Annual Immuno-Oncology Summit",
	"Second CRI-CIMT-EATI-AACR International Cancer Immunotherapy Conference: Translating Science into Survival",
	"2nd International Conference on Eye and Vision",
	"66th Annual Meeting of the American Society of Human Genetics",
	"Tumor Immunology and Immunotherapy",
	"31st Annual Meeting & Associated Programs, SITC",
	"Society for Neuroscience 2016 Annual Meeting",
	"Neoantigen Summit 2016",
	"The 58th American Society of Hematology Annual Meeting and Exposition",
	"39th San Antonio Breast Cancer Symposium",
	"World’s Premier Conference on Computational Biology – ISMB 2016",
	"World Preclinical Congress (WPC)",
	"ASCO Annual Meeting",
	"Big Data Bioinformatics conference",
	"The EUROPEAN HUMAN GENETICS CONFERENCE 2016",
	"Biomarkers & Diagnostics World Congress 2016",
	"The Cancer Immunotherapy Congress",
	"Diabetes Summit 2016",
	"AACR Annual Meeting, 2016",
	"Molecular Med TRI-CON, 2016",
	"NGS Data Analysis and Informatics Conference",
	"Advances in Genome Biology and Technology (AGBT) General Meeting",
	"Novel Immunotherapeutics Summit, 2016",
	"Functional Genomics Symposium",
	"Symposium on Mass Array Technology & its Applications",
	"The 11th Scientific Workshop of the ICGC",
	"APCON 2015",
	"EMBL Conference: Cancer Genomics",
	"SITC’s 30th Anniversary Annual Meeting & Associated Programs",
	"Largest Simultaneous Self-Examination for Breast Cancer in India",
	"2015 NextGen Genomics",
	"The 2nd Precision Medicine Congress ",
	"CRI-CIMT-EATI-AACR",
	"13th Annual Discovery on Target",
	"European Cancer Congress 2015 ",
	"Genomics-based decision making towards precision medicine",
	"Multi Gene Panel Testing for Inherited Cardiovascular Diseases",
	"Next Generation Sequencing in Diagnostics-Hope or Hype",
	"Genetic Tests in Neurological Disorder",
	"Symposium on Genetic Diseases: From Mendelian to Malignancies",
	"Mini-Symposium on Genomics in Hematology",
	"Child Neurology Group Meet",
	"Festival of Genomics",
	"The 2015 New York Venture Summit",
	"2015 BIO International Convention",
	"75th Scientific Sessions of the American Diabetes Association",
	"ASCO Annual Meeting 2015",
	"Symposium on Clinical Genomics",
	"Conference on Vitreo-Macular Problems (VIP-II)",
	"AACR Annual Meeting 2015",
	"2015 AGBT Meeting",
	"Association For Molecular Pathology (AMP) 2014 Annual Meeting and 20th Anniversary Celebration",
	"64th Annual Meeting of the American Society of Human Genetics",
	"NextGen Genomics & Bioinformatics Technologies (NGBT) Conference",
	"Pre-Conference NGS Bioinformatics Workshop"
];
$date = [
	"August 29 – September 2, 2016", "September 25-28, 2016", "September 26-28, 2016", "October 18-22, 2016", "October 20 - 23, 2016", "November 9-13, 2016", "November 12-16, 2016", "November 15-17 2016","December 3-6, 2016",
	"December 6-10, 2016","July 8-12, 2016","June 14-17, 2016","June 3-7, 2016","May 26-27, 2016","May 21-24, 2016","May 16-19, 2016","May 19-20, 2016","April 25-27, 2016",
	"April 16-20, 2016","March 6-11, 2016","February 18-19, 2016","February 10-13, 2016","January 25-26, 2016","December 13-14, 2015","December 11, 2015",
	"December 2-4, 2015","December 3-6, 2015","November 1 – 4, 2015","November 04-08, 2015","October 31, 2015","1st – 3rd October 2015","September 14-15, 2015",
	"September 16 – 19, 2015","September 21-24, 2015","September 25-29, 2015","10th September 2015","August 21, 2015","August 21, 2015","August 19, 2015",
	"August 17, 2015","August 08, 2015, 11 am – 5 pm","July 4, 2015","June 22-24, 2015","June 23-24, 2015","June 15-18, 2015","June 5-9, 2015",
	"May 29-June 02, 2015","May 01, 2015","April 25-26, 2015","April 18-22, 2015","February 25-28, 2015","November 12-15, 2014","October 18 through Wednesday, October 22,2014.",
	"17th -19th November 2014","15th-16th November 2014"
];
$venue = [
	"Boston, MA, USA",
	"Sheraton New York Times Square Hotel New York, New York",
	"Orlando, Florida, USA",
	"Vancouver, Canada",
	"Boston Marriott Copley Place, Boston, Massachusetts, USA",
	"Gaylord National Hotel & Convention Center in National Harbor, Maryland",
	"San Diego, USA",
	"Boston, MA",
	"San Diego, CA, USA",
	"San Antonio, Texas, USA",
	"Orlando, Florida, USA",
	"West in Boston waterfront Boston, MA",
	"McCormick Place, Chicago",
	"Boston, MA",
	"Barcelona, Spain",
	"Philadelphia Marriott Downtown, Philadelphia, PA",
	"Boston, USA",
	"Boston, MA, USA",
	"Ernest N. Morial Convention Center
New Orleans, Louisiana",
	"Mascon North Convention Center, San Francisco, CA, USA",
	"San Diego, CA, USA",
	"Orlando, Florida, USA",
	"San Diego, CA, USA",
	"Qatar National Convention Center, Doha, Qatar",
	"Narayana Netralaya Conference Hall, Narayana Health City, Bommasandra, Bengaluru",
	"Hotel Taj Lands End, Mumbai, India",
	"Le Meridien Kochi",
	"EMBL Heidelberg, Germany",
	"Gaylord National Hotel & Convention Center in National Harbor, Maryland, USA",
	"Kanteerva Indoor Stadium, Bangalore",
	"HICC, Hyderabad, INDIA",
	"London Heathrow Marriott Hotel
Bath Road Hayes UB3 5AN United Kingdom ",
	"Sheraton New York Times Square Hotel
New York, New York, USA ",
	"Westin Boston Waterfront, Boston MA",
	"Vienna, Austria",
	"Billroth Hospitals, Chennai",
	"RML Institute of Medical Sciences, Lucknow",
	"Command Hospital, Lucknow",
	"St. John’s Medical College Hospital, Bangalore",
	"Department of Biotechnology Auditorium, IIT Madras, Chennai",
	"Narayana Nethralaya Auditorium, Narayana Health City, Bangalore. ",
	"Peninsula Park, Mumbai",
	"Boston Convention and Exhibition Syndrome",
	"Digital Sandbox, New York City",
	"Philadelphia, Pennsylvania ",
	"Boston Convention and Exhibition Center, 415 Summer Street, Boston, Massachusetts 02210 ",
	"McCormick Place, Chicago, Illinois",
	"Narayana Nethralaya Auditorium, Bangalore",
	"25th April – Naryana Nethralya, Rajajinagar
26th April – Sheraton Bangalore Hotel, Brigade Gateway",
	"Pennsylvania Convention Center
Philadelphia, Pennsylvania",
	"Marco Island, Florida",
	"Gaylord National Resort & Convention Center National Harbor, MD (just outside Washington, DC)",
	"San Diego Convention
Center (SDCC) in San
Diego, California",
	"NIMHANS, Bangalore, India",
	"Institute of Bioinformatics, Bangalore, India"
];
$content = [
	
	"4th Annual Immuno-Oncology Summit has been designed to support a coordinated effort by industry players to bring commercial immunotherapies and immunotherapy combinations through clinical development and into the market. This weeklong, nine-meeting set will include topics ranging from early discovery through clinical development as well as emerging areas such as oncolytic virotherapy. Overall, this event will provide a focused look at how researchers are applying new science and technology in the development of the next generation of effective and safe immunotherapies.",
	"The Cancer Research Institute (CRI), the Association for Cancer Immunotherapy (CIMT), the European Academy of Tumor Immunology (EATI), and the American Association for Cancer Research (AACR) are proud to once again join forces to present the International Cancer Immunotherapy Conference. The program will focus on “Translating Science into Survival” and feature talks from more than 60 leaders in the field covering all areas of inquiry in cancer immunology and immunotherapy.  This meeting will provide an unparalleled opportunity for teaching, learning, and networking among all stakeholders in the field: scientists, clinicians, regulators, drug developers, and patient advocates.",
	"The conference proceedings will include seminars, symposiums and workshops on the latest treatment innovations in the field of Ophthalmology, Optometry by experts from both academia and ophthalmic Institutes and optometry organizations.",
	"The ASHG Annual Meeting is the largest human genetics meeting and exposition in the world. This year’s meeting is expected to attract over 6,500 scientific attendees, plus over 200 exhibiting companies. The meeting provides a forum for the presentation and discussion of cutting-edge science in all areas of human genetics.

	ASHG members and leading scientists from around the world are selected to present their research findings at invited, platform, and poster sessions. Abstracts presented at the Annual Meeting are published online and are citable. ASHG’s Annual Meeting also features a trade show floor that offers attendees the opportunity to view state-of-the-art medical and laboratory equipment, products, services, and computer software designed to enhance human genetics research, teaching, and consultation.",
	"A hallmark of this AACR immunology series is the integration of several sub-disciplines of cancer immunology and immunotherapy, with a broad focus on strategies to harness the immune system for the treatment and prevention of different cancers. Leaders in the field will present their latest work and provide critical updates on our deepening understanding of the immune response towards cancer. This Special Conference will also provide a unique opportunity for the authors of highly rated abstracts to present their work to an audience of researchers from around the world. Ample time will be provided for the stimulating discussions that are necessary to further the scientific and translational goals of the field. As the sixth in the series, this conference will continue to provide a forum for the effective exchange of ideas between basic cancer immunologists, non-immunologists and clinical oncologists, from academia to industry.",
	"Known as the premier destination for scientific exchange, education and networking in the cancer immunotherapy field, this is the conference you don't want to miss! With more than 2,400 people from across the globe attending SITC 2015, we look forward to continuing the discussion surrounding the newest science, insights and innovation in the cancer immunotherapy community at SITC 2016!",
	"SfN’s 46th annual meeting is the premier venue for neuroscientists to present emerging science, learn from experts, collaborate with peers, explore new tools and technologies, and advance careers.

	Neuroscience 2016 will take place November 12-16 at the San Diego Convention Center. Join more than 30,000 colleagues from more than 80 countries at the world’s largest marketplace of ideas and tools for global neuroscience.",
	"The Neoantigen Summit 2016 is perfectly timed to help guarantee the successful translation of exponentially more effective and commercially viable personalized immunotherapies to market, particularly for solid tumor indications.
	<br>As the field enthusiastically seeks to demonstrate significantly improved therapeutic efficacy, especially for solid tumors, join the collaborative ecosystem at the Neoantigen Summit to make the scientific, clinical and commercial refinements you need for therapeutic success.",
	"The American Society of Hematology (ASH) invites you to San Diego, California, for its 58th annual meeting. The ASH Annual Meeting is the world’s premier event in malignant and non-malignant hematology. The meeting provides an invaluable educational experience and an opportunity to review thousands of scientific abstracts highlighting updates in the hottest topics in hematology. Network with top minds in the field, as well as a global community of more than 20,000 hematology professionals from every subspecialty.",
	"This Symposium is designed to provide state-of-the-art information on the experimental biology, etiology, prevention, diagnosis, and therapy of breast cancer and premalignant breast disease, to an international audience of academic and private physicians and researchers.",
	
	"The annual international conference on Intelligent Systems for Molecular Biology (ISMB) is the major meeting of the International Society for Computational Biology (ISCB). Over the past 23 years the ISMB conference has grown to become the world’s largest bioinformatics/computational biology conference. ISMB 2016 will be the year’s most important computational biology event globally.

	The conferences provide a multidisciplinary forum for disseminating the latest developments in bioinformatics/computational biology. ISMB brings together scientists from computer science, molecular biology, mathematics, statistics and related fields. Its principal focus is on the development and application of advanced computational methods for biological problems. ISMB 2016 offers the strongest scientific program and the broadest scope of any international bioinformatics/computational biology conference. Building on past successes, the conference is designed to cater to variety of disciplines within the bioinformatics/computational biology community.",
	"World Preclinical Congress (WPC) has turned into a key networking event for those involved in preclinical research. It features conferences, training seminars and short courses that cover the very latest in preclinical strategies and technologies, to enable better and faster decisions in drug discovery. WPC attracts a diverse, global audience, which include experts, as well as people who are new and eager to contribute to the field. Having chemists, biologists, pharmacologists, toxicologists, screening and formulation experts in attendance, creates an interesting cross-disciplinary environment for tackling challenges and sharing expertise. Now in its 15th year the event will continue to highlight ways to improve accuracy and efficiency in preclinical research, while bringing together the people and technologies to make it happen.",
	"ASCO 2016 is Collective Wisdom: The Future of Patient-Centered Care and Research. Spanning disciplines, disease sites, and treatment approaches, it is our combined knowledge that will shape the future of patient care and research. We must partner with health care professionals and specialists of diverse backgrounds to meet the evolving challenges in providing optimal care to our patients. With exciting advances in big data technology, our collective wisdom will become all the more powerful as new insights will be revealed in seconds, not years. The impact of our wisdom, however, can only be as great as our ability to strengthen the delivery of and access to high-quality cancer care. As medical professionals and as a Society, we must all continue to evolve cancer care and research with each new discovery. Fifty years from now, we can hope that future medical professionals can look back and thank us for pioneering aspects of cancer treatment that were developed in our era.",
	"Big Data Bioinformatics conference provides cutting-edge information on developments in all areas of Bioinformatics research and novel Big Data analytic approaches.
<br><br>
An astonishing volume of biomedical information, ‘big data’, from lab studies, patient records and genomic sequencing are being brought together by life scientists all over the globe. This increasing volume and accessibility of ‘big data’ will provide opportunities for future medical programs in areas like personalized medicine. However ‘big data’ efforts face huge challenges, from creating analytic tools and solving scientific puzzles to accessing millions of gigabytes of data and overcoming barriers to accessing patients’ health records. In order to provide those future opportunities, specific challenges need to be addressed to integrate current discoveries into medical practice.
<br><br>
Through lectures and various discussions, the Big Data Bioinformatics meeting will assemble leading researchers and experts who will present solutions to some of these challenges.",
	"The European Human Genetics Conference (now in its 49th year) is a forum for all workers in human and medical genetics to review advances and develop research collaborations. The conference has become one of the premier events in the field of human genetics with over 3.000 delegates, more than 215 oral presentations, 18 workshops, 8 educational sessions, and over 150 exhibiting companies.
<br><br>
The ESHG conference is where the latest developments in human genetics are discussed, and where professionals from all parts of human genetics meet.
2016 marks another joint congress with the European Meeting on Psychosocial Aspects of Genetics. Join your colleagues for a fabulous meeting in magic Barcelona. The European Society of Human Genetics promotes research in basic and applied human and medical genetics and facilitates contact between all persons who share these aims.",
	"Cambridge Healthtech Institute’s Twelfth Annual Biomarkers & Diagnostics World Congress 2016 is dedicated to all areas of biomarker research spanning the pharmaceutical and diagnostic pipeline. The meeting brings together a unique and international mix of large and medium pharmaceutical, biotech and diagnostics companies, leading universities and clinical research institutions, government and national labs, CROs, emerging companies and tool providers—making the Congress a perfect meeting-place to share experience, foster collaborations across industry and academia, and evaluate emerging technologies. Now in its twelfth year, the Biomarkers & Diagnostics World Congress is the leading annual meeting dedicated to biomarker and diagnostics research and implementation that consistently delivers a cutting-edge agenda, 400+ senior delegates, and a sold-out exhibit hall",
	"Cancer immunotherapy has made extraordinary progress both conceptually and in clinical practice. The recent FDA approval of drugs in this area has paved the way for many upcoming independent and combination therapies in the immuno-oncology segment.
<br><br>
A variety of strategies are continuing to evolve in the laboratory and in the clinic, including cancer vaccines, T cells, and immune checkpoint blockade. Despite their promise, much more research is needed to understand how and why certain cancers fail to respond to immunotherapy and to predict which therapeutic strategies, or combinations thereof, are most appropriate for each patient.",
	"This unique event encompasses the drug discovery and partnering aspects of diabetes in two individual conferences that take place concurrently:
9th Diabetes Drug Discovery & Development Conference
6th Diabetes Partnering & Deal-Making Conference
Experts from industry and academia will discuss the bionic pancreas, bariatric surgery, the gut microbiome, obesity, and emerging therapies to target Type 1 and Type 2 diabetes in sessions and panels geared towards novel therapeutic strategies, drug discovery, and partnering with pharmaceuticals, biotech firms, and academic institutions. ",
	"The AACR Annual Meeting is a must-attend event for cancer researchers and the broader cancer community. This year’s theme, “Delivering Cures Through Cancer Science,” reinforces the inextricable link between research and advances in patient care. The theme will be evident throughout the meeting as the latest, most exciting discoveries are presented in every area of cancer research. There will be a number of presentations that include exciting new data from cutting-edge clinical trials as well as companion presentations that spotlight the science behind the trials and implications for delivering improved care to patients.
<br><br>
This cross-cutting, multidisciplinary program will include an outstanding roster of speakers, hundreds of invited talks, and more than 6,000 proffered papers from researchers around the globe. As always, the diversity of the AACR Annual Meeting program will give presenters a forum to share critical updates in all areas, as well as members of the audience an opportunity to actively participate in discussions with colleagues.",
	"Attracting over 3,300 drug discovery and development professionals from over 40 countries in 2015, the Tri-Conference has grown into a diverse event, focusing on Molecular Medicine, specifically on Discovery, Genomics, Diagnostics and Information Technology.
<br><br>
With a 23 year history, this year’s expanded coverage includes additional programs on Molecular Diagnostics for Infectious Disease, Precision Medicineand Cancer Immunotherapy, as well as two new symposia on Companion Diagnostics and the Commercialization of Molecular Diagnostics.",
	"The increased use of next generation sequencing has led to challenges in data analysis, large-scale data storage and management, multi-site data integration, validation for quality and scale-up of informatics. It is integral to overcome these analysis and informatics challenges to successfully translate NGS research and data from the lab to clinical stage.
Growing collaborations between organisations and increased NGS data sharing between locations has created a need for a more robust and secure data storage, analysis, access and integration system while ensuring high quality of the NGS data being produced.
At the ‘NGS Data Analysis and Informatics Conference’ to be held on 18 – 19 February 2016 in San Diego, CA – USA we will be discussing strategies to accurately analyse and scale-up informatics for the data generated through the NGS technology while ensuring quality and scalability of the data.",
	"Advances in Genome Biology and Technology (AGBT) General Meeting is our flagship event bringing together technology, software, applications, data resources and public policy. AGBT provides a forum for exchanging information about the latest advances in DNA sequencing technologies, experimental and analytical approaches for genomic studies, and their myriad applications. The meeting format includes daytime plenary sessions that feature invited speakers and abstract-selected talks that highlight cutting-edge research across the broad landscape of genomics. The evening concurrent session includes experimental and computational approaches for effectively utilizing the latest DNA sequencing technologies.",
	"The summit will bring together our usual balance of industry and academia, so that delegates have the unique opportunity to network with colleagues from different sectors and gain a fresh perspective on the various topics below.",
	"Sidra Medical and Research Center (Sidra) is proud to host the Functional Genomics Symposium in Qatar on the 13th and 14th of December 2015.
<br><br>
This symposium will offer the opportunity to discuss cutting edge advances in functional genomics and in genomics medicine among world-leading researchers and scientists. The two day event will feature presentations and discussions that will address the impact of genetic studies on complex disorders and rare diseases.
<br><br>
An exhibition from world-leading technology and service providers will run in parallel with the symposium presentations.",
	"<img src='img/event/medgenome.png'>",
	"The ICGC serves as a forum for international cancer communities to discuss common problems and share “lessons learned” through an international network that is dedicated to thoroughly characterizing the myriad genomic changes across many types of cancer. To achieve this goal, the ICGC has developed policies and quality control criteria to guide the various in-country funding bodies in designing their respective cancer genome characterization projects. With patient protection policies fully harmonized, the ICGC provides an open-access, federated database that enables access to data from more than 88 international projects.
<br><br>
The purpose of the workshop is to discuss and coordinate the range of issues related to the development and implementation of ICGC projects. Examples of anticipated discussion topics/sessions include sample acquisition and stewardship; patient informed consent and bioethics; data management and analysis; verification; data-sharing; funding models; and genome characterization technologies.",
	" Deeper understanding of cell biology using molecular tools and genomic data is radically changing the face of medical science. Newer histomorphological classifications, profiling of individuals and diseases, designer drugs and personalised medicine are all hallmarks of the new paradigm. And the discipline of Pathology is at the centre of it all. It is poised to become once again the central subject of Medicine as in Rudolf Virchow’s glory days!

APCON 2015 in Kochi is where the Pathology community of India prepares for the changing times. There will be a special general body of the IAPM to discuss revamping of the organization. There will be discussions on restructuring Pathology education. There will be simultaneous CME programs showcasing what is new and trending in every branch of Pathology. ",
	"This conference will provide an opportunity to learn about and keep up to date with the rapidly progressing area of cancer genomics. It will cover presentations from cancer genome projects, the areas of cancer functional genomics, systems biology, cancer mouse models and the translation and clinical impact of scientific results obtained. The meeting will bring together leading scientists from across these areas for a unique opportunity to interact and stimulate further integration of these efforts.",
	"The Society for Immunotherapy of Cancer (SITC) is the world’s leading member-driven organization specifically dedicated to professionals working in the field of cancer immunology and immunotherapy. Established in 1984,SITC is a 501(c)(3) not-for-profit organization with a growing constituency of academic, government, industry, clinical and basic scientists, and clinicians from around the world.
<br><br>
Through emphasis on high-caliber scientific meetings, dedication to education and outreach activities, focus on initiatives of major importance in the field, and commitment to collaborations with like-minded domestic and international organizations, government and regulatory agencies, associations and patient advocacy groups,SITC brings together all aspects of the cancer immunology and immunotherapy community.",
	"Every year the month of October globally is observed as “Breast Cancer Awareness Month.” BGS Global Hospitals along with crest foundation planned a major CSR activity, to create awareness on breast cancer and educate women on the importance of self-breast examination. The event “Largest Simultaneous Self Examination for Breast Cancer in India”, was attended by more than 5000 women from different walks of life. <img src='img/event/Global-Pinktober-041.jpg'>",
	"SciGenom Research Foundation (SGRF) along with its co-hosts Center for Cellular and Molecular Biology (CCMB), and Institute of Bioinformatics (IOB) are pleased to announce the 2015 NextGen Genomics, Biology, Bioinformatics and Technologies (NGBT) Conference in Hyderabad, India. This is the fifth international meeting organized by SGRF, that will show case the exciting developments in genomics technologies, their applications in life sciences including human, plant and animal biology, drug discovery, clinical trials, and personalized therapy.
<br><br>
The conference will feature accomplished speaker who are thinkers and thought leaders that shape the course of scientific discovery. The conference will present an ecosystem for scientists and students to share their work, build new connections and explore collaborations. ",
	"Following on from the success of the inaugural meeting which attracted over 150 key senior attendees, Global Engage is pleased to announce the 2nd Precision Medicine Congress which will be held on 14-15 September 2015 in London, UK. The meeting is part of our successful Drug Discovery series which includes innovative meetings on Digital Health, Digital Pathology, Human Microbiome, Synthetic Biology, qPCR / dPCR, & Biologics among others.",
	"With the explosion of interest in cancer immunotherapy and the proliferation of scientific meetings in the field, the time is right for a coordinated effort hosted by the field’s leaders. The Cancer Research Institute (CRI), the Association for Cancer Immunotherapy (CIMT), the European Academy of Tumor Immunology (EATI), and the American Association for Cancer Research (AACR) are proud to join forces to sponsor the first International Cancer Immunotherapy Conference. This collaborative meeting will be held every other year, in lieu of each organization’s individual meeting, and will alternate between the United States and Europe. We believe that by combining our efforts we can be more effective and efficient in disseminating the latest cutting-edge information.",
	"Rare diseases, or diseases that affect only a small percentage of the population, are growing in significance and prominence in recent years. According to the National Institutes of Health, there are nearly 7000 rare diseases and more than 25 million Americans are suffering from one of them. The symposium on Strategies for Rare Diseases will bring together leading scientists, clinicians, executives and experts who are deeply involved in bringing to market the treatments for such rare diseases. This symposium will highlight scientific breakthroughs, use of innovative technologies and approaches to tackle translational challenges and bring together the right mix of people to discuss potential opportunities in this field.",
	"The European Cancer Congress (ECC 2015) is a biennial congress which combines the efforts of the most important European oncology professionals with the aim of improving the prevention, diagnosis, treatment and care of cancer patients.",
	"Consultants of various specialties from Obstetrics to Oncology discussed about the role of genomics in clinical medicine and specifically about the role of non-invasive prenatal testing and its significance.<img src='img/event/DSC03318.jpg'><br><img src='img/event/DSC03319.jpg'>",
	"MedGenome discussed genetic testing in Inherited Cardiovascular Diseases in a round table meeting with Cardiologists at RML Institute of Medical Sciences, Lucknow",
	"MedGenome presented its Next Generation Sequencing genetic diagnostic capabilities in a round table meeting with Paediatricians & Neonatologists at Command Hospital, Lucknow",
	"MedGenome discussed genetic testing in Neurological disorders in a round table meeting with Neurologists at St. Johns Hospital, Bangalore",
	"The goal of this symposia is to interface practicing physicians, clinical and research geneticist working on various aspects of familial diseases to provide an overview of the disease profiles in the Indian subcontinent and to discuss the potential for genomics to contribute to better diagnostic and management approaches.
<br><br>
The Department of Biotechnology at IIT Madras is reputed for a strong interdisciplinary research and academic standing in biological sciences, engineering and is in active collaboration with industries and health-care institutions. The focus of the department includes basic research in modern biotechnology and molecular basis of health and disease.
<br><br>
SciGenom Research Foundation (SGRF) is a not-for-profit organization, working to promote Science in India through research and education. SGRF is currently engaged in an effort to identify the genetic cause of rare and complex genetic disorders in collaboration with various academic institutions and hospitals. ",
	"The goal of this symposia is to interface practicing physicians, clinical and research geneticist working on various aspects of hematological diseases to provide an overview of the disease profiles in the Indian subcontinent and to discuss the potential for genomics to contribute to better diagnostic and management approaches",
	"MedGenome is participating in Child Neurology Group meet where we will discuss the relevance of advanced genetic testing in Neurology. <img src='img/event/CNG1.jpg'>",
	"Front Line Genomics has an unrelenting mission to increase momentum in the widespread adoption of genomic medicine. Our primary motive is not profit. Our goal with this festival is to create the world’s most valued and practically useful genomics event, and deliver it in a fun, engaging environment conducive to learning and networking. At a price that allows lots of people to attend, to create the optimal outcome for patients.
That’s why we’ve ripped up the event rule book and created the world’s leading genomics event, at the lowest attendee price possible.",
	"The 15th annual New York Venture Summit, presented by youngStartup Ventures, is the premier industry gathering connecting venture capitalists, corporate VCs, angel investors, technology transfer professionals, senior executives of early stage and emerging growth companies, university researchers, incubators and premier service providers.",
	"The world’s largest biotechnology gathering, the BIO Exhibition allows exhibitors to reach high-level executives and influential decision makers who come to BIO to discover new players in the industry, form partnerships and evaluate emerging technologies. <br><img src='img/event/Bioimage_1.jpg'><br><img src='img/event/Bio_Image_2.jpg'>",
	"The American Diabetes Association’s Scientific Sessions brings together scientists and health care professionals from around the world who are involved in diabetes research and care. The program will feature timely and significant advances in basic science and the prevention, diagnosis, and treatment of diabetes.
<br><br>
The program is organized into eight distinct theme areas, allowing you to focus on your specialty or expand your knowledge in other areas. Attendees will be able to choose from over 3,000 original presentations to include scientific and educational sessions, oral and poster presentations, and special lectures and addresses delivered by some of the most recognized names in the field of diabetes.
<br><br>
Theme areas:
<ul>
<li> Acute and Chronic Complications</li>
<li>Behavioral Medicine, Clinical Nutrition, Education, and Exercise</li>
<li>Clinical Diabetes/Therapeutics</li>
<li>Epidemiology/Genetics</li>
<li>Immunology/Transplantation</li>
<li>Insulin Action/Molecular Metabolism</li>
<li>Integrated Physiology/Obesity</li>
<li>Islet Biology/Insulin Secretion</li>
</ul>",
	"The ASCO Annual Meeting brings together 30,000 oncology professionals from around the world. Educational sessions feature world-renowned faculty discussing state-of-the-art treatment modalities, new therapies, and ongoing controversies in the field.
<br><br>
The theme for ASCO 2015 is Illumination and Innovation: Transforming Data into Learning. Innovation—the imaginative and creative use of knowledge to transform how we improve the lives of patients in a sustainable and scalable manner—is the necessary companion to illumination. <img src='img/event/ASCO-Photo-1.jpg'>",
	"MedGenome is proud to sponsor a Symposium on Clinical Genomics of Renal, Cardiovascular and Neurological Disorders. The symposia brings physicians and researchers working in renal, cardiovascular and neurological disorders to provide an overview of the disease profiles in the Indian subcontinent and to discuss the potential for genetics and genomics to contribute to better diagnostic and treatment approaches.",
	"MedGenome participated in VIP II – a program to discuss vitreomacular interface problems. The conference hosted esteemed faculty who brought their knowledge and experience on the management of persistent macular holes, diabetic macular edema and myopic foveoschisis to name a few.",
	"The AACR Annual Meeting 2015 will highlight the latest, most exciting discoveries in every area of cancer research and will provide a unique opportunity for investigators from all over the world to meet, interact, and share their insights. This year’s meeting theme – “Bringing Cancer Discoveries to Patients” – underscores the vital and inextricable link between discovery and treatment, and it reinforces the fact that research underpins all the progress we are making in the field toward cancer cures.",
	"The 16th annual Advances in Genome Biology and Technology (AGBT) meeting will be held in Marco Island, Florida, on February 25-28, 2015. As a recognized cornerstone for the genomics research community, this annual meeting provides an outstanding forum for exchanging information about the latest advances in DNA sequencing technologies, experimental and analytical approaches for genomic studies, and their myriad applications.",
	"Medgenome is participating in the Association For Molecular Pathology 2014 Annual Meeting as they celebrate AMP’s 20th Anniversary from November 12-15, 2014 in National Harbor, MD (just outside of Washington, DC). The theme of the meeting will be, “Realizing the Dream of Precision Medicine.”",
	"Medgenome is participating in the 64th Annual Meeting of the American Society of Human Genetics being held at the San Diego Convention Center (SDCC) in San Diego, California, from Saturday, October 18 through Wednesday, October 22, 2014. The ASHG Annual Meeting is the largest human genetics meeting and exposition in the world. This year’s meeting is expected to attract over 6,500 scientific attendees, plus over 200 exhibiting companies. The meeting provides a forum for the presentation and discussion of cutting edge science in all areas of human genetics.",
	"<img src='img/event/medgenome-stall.jpg'><br><img src='img/event/Medgenome-events-dec-11.jpg'>",
	"<img src='img/event/IMG_4124.jpg'>"
];
$image = [
	"immuno-oncology.jpg",
	"cri.jpg",
	"eye-and-vision.jpg",
	"ashg2016.jpg",
	"aacr.jpg",
	"sitc.jpg",
	"sociey-for-neuro-scinece.png",
	"neo.jpg",
	"American-Hametology.jpg",
	"san-antonio.jpg",
	"ismb.jpg",
	"wpc.jpg",
	"asco.jpg",
	"big-data.jpg",
	"eshg.jpg",
	"biomakers.jpg",
	"cancer.jpg",
	"diabetes.jpg",
	"aarc.png",
	"The-Molecular-Medicine-Tri-Conference-2016.png",
	"NGS-Data-Analysis-and-Informatics-Conference.png",
	"AGBT-20161.png",
	"Novel-Immunotherapeutics.png",
	"FireShot-Capture-294-Functional-Genomics-Symposium-I-Sidra_-http___events.sidra_.org_event_func.png",
	"ils.png",
	"international-cancer-genome-consortium.png",
	"apcon.jpg",
	"EMBL.png",
	"sitc-2015.png",
	"Breast-Cancer-Event-2015.jpg",
	"Upcoming-Events-http___medgenome.com_featured-event_.png",
	"Precision_Medicine.jpg",
	"cri-cimt.png",
	"FireShot_Capture_-_Symposium__Strategies_for_Rare__-_http___www.discoveryontarget.com_rare-diseases_.png",
	"European-Cancer-Congress-2015.png",
	"DSC03321.jpg",
	"Multi-Gene-Panel-Testing-for-Inherited-Cardiovascular-Diseases.jpg",
	"Next-Generation-Sequencing-in-Diagnostics-Hope-or-Hype.jpg",
	"event-medgenome-1024x708.jpg",
	"nill",
	"nill",
	"CNG2.jpg",
	"Festival_of_Genomics.jpg",
	"newyork2015.png",
	"2015_BIO_International_Convention.png",
	"American_Diabetes_Association.png",
	"ASCO-Photo-2.jpg",
	"Symposium-on-Clinical-Genomics-of-Renal.jpg",
	"medgenome-event.jpg",
	"collage.jpg",
	"nill",
	"AMP2014MMeetingBanner-CD.jpg",
	"Event-image-upload.jpg",
	"event2-image.jpg",
	"event2-image.jpg"
];
$url = [
	"https://chidb.com/reg/imx/reg.asp",
	"http://www.aacr.org/Meetings/Pages/MeetingDetail.aspx?EventItemID=101#.V8L0Gk197IU",
	"http://eye.conferenceseries.com/",
	"http://www.ashg.org/2016meeting/",
	"http://www.aacr.org/Meetings/Pages/MeetingDetail.aspx?EventItemID=92#.V8L2Nk197IU",
	"http://www.sitcancer.org/2016",
	"https://www.sfn.org/annual-meeting/neuroscience-2016",
	"http://neo-antigen.com",
	"http://www.hematology.org/Annual-Meeting/Archive.aspx",
	"https://www.sabcs.org",
	"http://www.iscb.org/ismb2016",
	"http://www.worldpreclinicalcongress.com/wpc_content.aspx?id=94789",
	"http://am.asco.org/",
	"https://www.gtcbio.com/conferences/big-data-bioinformatics-overview?alias=big-data-bioinformatics",
	"https://www.eshg.org/home2016.0.html",
	"http://www.biomarkerworldcongress.com/",
	"http://www.mnmconferences.com/The-Cancer-Immunotherapy-Congress",
	"https://www.gtcbio.com/register/diabetes-summit",
	"http://www.aacr.org/Meetings/Pages/MeetingDetail.aspx?EventItemID=63&DetailItemID=224#.V3DlUKLQg8u",
	"http://www.triconference.com/",
	"http://www.mnmconferences.com/NGS-Data-Analysis-and-Informatics-Conference",
	"#",
	"https://www.gtcbio.com/conferences/immunotherapeutics-summit-overview",
	"http://events.sidra.org/event/functional-genomics-symposium/",
	"http://medgenome.com/file/2015/12/Dec-11-Symposium-Invite-card_v1.0.pdf",
	"#",
	"#",
	"http://www.embl.de/training/events/2015/CAN15-01/index.html",
	"http://www.sitcancer.org/2015",
	"#",
	"http://www.sgrfconferences.org/2015/NGBT/",
	"http://www.globalengage.co.uk/precision-medicine.html",
	"http://www.aacr.org/Meetings/Pages/MeetingDetail.aspx?EventItemID=54#.V3D1uaLQg8t",
	"http://www.discoveryontarget.com/rare-diseases/",
	"http://www.esmo.org/Conferences/Past-Conferences/European-Cancer-Congress-2015",
	"#",
	"#",
	"#",
	"#",
	"#",
	"http://medgenome.com/file/2014/09/Hematology_Flyer_08Aug2015.pdf",
	"#",
	"http://www.frontlinegenomics.com/upcoming-festivals/",
	"http://www.youngstartup.com/newyork2015/overview.php",
	"http://convention.bio.org/2016/",
	"#",
	"#",
	"#",
	"#",
	"http://www.aacr.org/Meetings/Pages/MeetingDetail.aspx?EventItemID=25#.VRz5yOGdKQZ",
	"#",
	"http://www.amp.org/meetings/2014/",
	"#",
	"http://www.scigenomconferences.com/2014/program.php",
	"http://www.scigenomconferences.com/2014/program.php"
];
?>

<div class="event">
	<div class="container">
		<div class="row tab">
			<div class="col-md-24">
				<div class="panel with-nav-tabs">
					<div class="panel-heading">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1info" data-toggle="tab">Info 1</a></li>
							<li><a href="#tab2info" data-toggle="tab">Info 2</a></li>
						</ul>
					</div>
					<div class="panel-body">
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab1info">Info 1</div>
							<div class="tab-pane fade" id="tab2info">Info 2</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php /*for($i=0; $i < count($title); $i++){*/?>
		<?php for($i=0; $i < 2; $i++){?>
			<div class="main">
				<div class="left" >
					<h3><?php echo $left_title[$i]?></h3>
					<hr>
					<h4>Date:</h4>
					<p><?php echo $date[$i]?></p>
					<h4>Venue:</h4>
					<p><span><?php echo $venue[$i]?></span>
					</p>
				</div>
				<div class="body">
					<h3><?php echo $title[$i]?></h3>
					<p><?php echo $content[$i]?></p>
					<p><?php if($image[$i] != "nill"){?><img alt="<?php echo $title[$i];?>" src="<?php echo $site_path;?>/img/event/<?php echo $image[$i]?>"><br><?php } ?>
					<?php if($url[$i] != "#"){?><a dpc-external="true" target="_blank" href="<?php echo $url[$i]?>">Click here to know more</a><?php } ?>
					</p>
				</div>
			</div>
		<?php } ?>
	</div>
</div>