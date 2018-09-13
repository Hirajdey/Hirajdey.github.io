<?php
$url = basename($_SERVER['PHP_SELF']);
$page_name = basename($url, ".php").PHP_EOL;
$title = "";
$description = "";
$keywords = "";

$symposium = [
    "title"=>"Symposium Registration",
    "description"=>"Symposium on Cancer Genomics on March 20, 2017 at MedGenome Foster City Facility",
    "keywords"=>"Symposium Registration"
];
if (trim($page_name) == "symposium") {
    $title =  $symposium['title'];
    $description = $symposium['description'];
    $keywords = $symposium['keywords'];
}

$index = [
    "title"=>"Genomics-based diagnostics and research company",
    "description"=>"Leading provider of global genomic research services and market leader for genetic diagnostic testing. Our unique access to genomics data with clinical and phenotypic information provides insights into complex diseases at the genetic and molecular level to facilitate research in personalized healthcare.  We have dedicated genomic solutions in cancer immunotherapy, diabetes and rapidly expanding into other disease areas including ophthalmology, neurology and rare diseases.",
    "keywords"=>"Clinical Genomics, Genetic Testing, DNA Testing, Prenatal Testing, Genomic Research, Chromosomal Microarray, RT-PCR, Sanger Sequencing, NGS, Next-Generation Sequencing, Fludigm - Genetic Sequencing, DNA Sequencing, RNA-Seq"
];
if (trim($page_name) == "index") {
    $title =  $index['title'];
    $description = $index['description'];
    $keywords = $index['keywords'];
}
$stories = [
    "title"=>"Stories-Medgenome Labs",
    "description"=>"MedGenome Case Stories",
    "keywords"=>"Tay-Sachs disease, carriers of organic aciduria, eye cancer , deletion of the RB1 gene"
];
if (trim($page_name) == "stories") {
    $title =  $stories['title'];
    $description = $stories['description'];
    $keywords = $stories['keywords'];
}
$media = [
    "title"=>"In the press-Medgenome Labs",
    "description"=>"MedGenome Media Section",
    "keywords"=>"southeast Asian consortium, AIIMS Bhopal and MedGenome, State-of-the-Art Genomics Services, Genetics in Ophthamology, MedGenome’s OncoMD, MedGenome Bio-Excellence Award, KCHRC and MedGenome, South Asian Genome Variation Database (SAGVDB), Genomics-based Clinical Reporting in MENA Region, gene mutations associated with cardiac function, Genetics in Ophthamology, Acquires Lifecode Health Assets and CLIA Certified Lab, clinical management of Lung Cancer, LifeMap partners with MedGenome, Dr Mammen Chandy, Haematocon, hereditary neurological diseases, Deaf blindness Awarenes, Mass Array Technology and its Applications, Golden Helix integrates MedGenome, Prenatal test to detect genetic flaws, Gene therapy, Cartagenia Partners with MedGenome, $4M Series A for India DNA Database"
];
if (trim($page_name) == "media" || trim($page_name) == "videos") {
    $title =  $media['title'];
    $description = $media['description'];
    $keywords = $media['keywords'];
}
$careers = [
    "title"=>"Bioinformatics IT Software Marketing Sales Labs-Medgenome Labs",
    "description"=>"MedGenome Careers - working for personalized healthcare",
    "keywords"=>"IT, Bioinformatics, Lab and Operations, Administration, Marketing and Sales, Finance"
];
if (trim($page_name) == "careers") {
    $title =  $careers['title'];
    $description = $careers['description'];
    $keywords = $careers['keywords'];
}
$itsoftware = [
    "title"=>"Careers IT-Medgenome Labs",
    "description"=>"MedGenome IT Services",
    "keywords"=>"Networking Engineer"
];
if (trim($page_name) == "itsoftware") {
    $title =  $itsoftware['title'];
    $description = $itsoftware['description'];
    $keywords = $itsoftware['keywords'];
}
$bioinformatics = [
    "title"=>"Careers Bioinformatics-Medgenome Labs",
    "description"=>"MedGenome Bioinformatics Careers",
    "keywords"=>"Bioinformatics Trainee, Bioinformatics Analyst, Bioinformatics Senior Analyst, Bioinformatics Scientist, Biostatistician"
];
if (trim($page_name) == "bioinformatics") {
    $title =  $bioinformatics['title'];
    $description = $bioinformatics['description'];
    $keywords = $bioinformatics['keywords'];
}
$lab_operations = [
    "title"=>"Careers Lab Operations-Medgenome Labs",
    "description"=>"MedGenome Lab Careers",
    "keywords"=>"Genome Analyst"
];
if (trim($page_name) == "careers-lab-operations") {
    $title =  $lab_operations['title'];
    $description = $lab_operations['description'];
    $keywords = $lab_operations['keywords'];
}
$administration = [
    "title"=>"Careers Administration-Medgenome Labs",
    "description"=>"MedGenome Administrative Careers",
    "keywords"=>"Manager – Admin and Infrastructure Management"
];
if (trim($page_name) == "careers-administration") {
    $title =  $administration['title'];
    $description = $administration['description'];
    $keywords = $administration['keywords'];
}
$finance = [
    "title"=>"Careers marketing executive purchase and finance-Medgenome Labs",
    "description"=>"MedGenome Finance Careers",
    "keywords"=>"Executive – Purchase and Finance"
];
if (trim($page_name) == "careers-finance") {
    $title =  $finance['title'];
    $description = $finance['description'];
    $keywords = $finance['keywords'];
}
$sale = [
    "title"=>"Marketing and Sales-Medgenome Labs",
    "description"=>"MedGenome Marketing and Sales",
    "keywords"=>"Marketing Manager, Business Development Executive, Business Development Executive – Oncology"
];
if (trim($page_name) == "careers-sale") {
    $title =  $sale['title'];
    $description = $sale['description'];
    $keywords = $sale['keywords'];
}
$bioinformatician = [
    "title"=>"Careers Bioinformatician USA-Medgenome Labs",
    "description"=>"MedGenome Bioinformatics US Careers",
    "keywords"=>"Junior Senior Bioinformatician"
];
if (trim($page_name) == "careers-bioinformatician-usa") {
    $title =  $bioinformatician['title'];
    $description = $bioinformatician['description'];
    $keywords = $bioinformatician['keywords'];
}
$events = [
    "title"=>"Upcoming Events-Medgenome Labs",
    "description"=>"MedGenome Conferences and Events",
    "keywords"=>"European Human Genetics Conference, Big Data Bioinformatics conference, World Preclinical Congress, Intelligent Systems for Molecular Biology (ISMB), 4th Annual Immuno-Oncology Summit, ASHG 2016, Society for Neuroscience, American Society of Hematology, 39th San Antonio Breast Cancer Symposium"
];
if (trim($page_name) == "events") {
    $title =  $events['title'];
    $description = $events['description'];
    $keywords = $events['keywords'];
}
$sitemap = [
    "title"=>"Sitemap-Medgenome Labs",
    "description"=>"Clinical Genomics and Genomic Research Services",
    "keywords"=>"Company, Management, Directors, Advisors, Collaborators, Our Investors, MedGenome Institutional Ethics Committee, Cardiology, Endocrinology, ENT, Haematology, Investigational, Nephrology, Neurology, Oncology, Ophthalmology, Paediatrics, Non-Invasive Prenatal Test, Genetic Counselling Service, Genomic Research Services, Disease Programs, Integrated Genomics Platform, Genomic Solutions, OncoMD, OncoPept, Genome Analysts, Publications, Blog, Stories, Media, Careers, Events, Contact"
];
if (trim($page_name) == "sitemap") {
    $title =  $sitemap['title'];
    $description = $sitemap['description'];
    $keywords = $sitemap['keywords'];
}
$contactus = [
    "title"=>"Contact-Medgenome Labs",
    "description"=>"MedGenome Contact Details",
    "keywords"=>"3rd Floor, Narayana Netralaya Building, MedGenome Cochin, Kerala, MedGenome, Gurgaon, MedGenome, Chennai"
];
if (trim($page_name) == "contactus") {
    $title =  $contactus['title'];
    $description = $contactus['description'];
    $keywords = $contactus['keywords'];
}
$company = [
    "title"=>"Company-Medgenome Labs",
    "description"=>"Genomics based research and diagnostics company",
    "keywords"=>"decoding genetic information, market leader in genomics-based diagnostics, cutting-edge genomics technologies, bioinformatics, cancer, metabolic, eye disorders, rare diseases, hereditary diseases, neurological disorders, Narayana Health City, Narayana Nethralaya building"
];
if (trim($page_name) == "company") {
    $title =  $company['title'];
    $description = $company['description'];
    $keywords = $company['keywords'];
}
$management = [
    "title"=>"Management-Medgenome Labs",
    "description"=>"MedGenome Management - Genomics Research Company",
    "keywords"=>"Sam Santhosh, Genome man of India, SciGenom, Emerge Ventures, Kartik Kumaramangalam, Papillon Capital, Girish Mehta, CEO, diagnostic services, Sanjay Kumar Sharma, OTC, diagnostic and healthcare, Dr. V L Ramprasad, Spinco Biotech, Vision Research Foundation, Sankara Nethralaya, Dr. Chirantan Bose, large scale Pathology labs, IFCAP, Surajit Chakrabartty, India&#039;s 100 successful CFO, Dr. Amitabha Chaudhuri, oncology target discovery, Debbie Consiglio, cancer cell detection business, Hiranjith G H, strategy and consulting professional, Dr. Arati Khanna Gupta, Hematology"
];
if (trim($page_name) == "management") {
    $title =  $management['title'];
    $description = $management['description'];
    $keywords = $management['keywords'];
}
$directors = [
    "title"=>"Directors-Medgenome Labs",
    "description"=>"Business Directors - MedGenome - A Genomics Research Company",
    "keywords"=>"Mahesh Pratapneni, EmergeOut Ventures, Dhiraj Rajaram, Mu Sigma Inc, Abhay Pandey, Sequoia Capital"
];
if (trim($page_name) == "directors") {
    $title =  $directors['title'];
    $description = $directors['description'];
    $keywords = $directors['keywords'];
}
$advisors = [
    "title"=>"Advisors-Medgenome Labs",
    "description"=>"Advisors - MedGenome - A Genomics Research Company",
    "keywords"=>"Dr. Stephan C Schuster, Research Director, Singapore Centre on Environmental Life Sciences Engineering, Dr. Ishwar C. Verma, Department of Genetic Medicine at Sri Ganga Ram Hospital, Dr. Satish Menon, UV Labs, data-driven personalized learning management platforms, Dr. C. N. Ramchand, Saksin Lifesciences, Dan Peterson, ePay Healthcare"
];
if (trim($page_name) == "advisors") {
    $title =  $advisors['title'];
    $description = $advisors['description'];
    $keywords = $advisors['keywords'];
}
$investors = [
    "title"=>"Our Investors-Medgenome Labs",
    "description"=>"Investors - MedGenome - A Genetic Diagnostic Testing Company",
    "keywords"=>"Kartik Kumaramangalam – Papillon Capital, Mahesh Pratapneni – Emerge Ventures, Dhiraj Rajaram – Mu Sigma, Dmitri Melhorn, $20 million backing from Sequoia Capital"
];
if (trim($page_name) == "investors") {
    $title =  $investors['title'];
    $description = $investors['description'];
    $keywords = $investors['keywords'];
}
$iec = [
    "title"=>"MedGenome Institutional Ethics Committee (MG-IEC)-Medgenome Labs",
    "description"=>"MedGenome Institutional Ethics Committee (MG-IEC)",
    "keywords"=>"independent body, wellbeing of research participants, rights of research participants, Dr Kumaramanickavel, Dr Vijayalakshmi, Dr Beena"
];
if (trim($page_name) == "medgenome-iec") {
    $title =  $iec['title'];
    $description = $iec['description'];
    $keywords = $iec['keywords'];
}
/*$collaborators = [
    "title"=>"Collaborators-Medgenome Labs",
    "description"=>"Collaborators - MedGenome - A Genetic Diagnostic Testing Company",
    "keywords"=>"Tata Memorial Centre, Mumbai, KIMS Trivandrum, Institute of Bioinformatics (IOB) Bangalore, Dr. Mohan&#039;s Diabetes Centre, Chennai, Narayana Nethralaya, Bangalore"
];*/

/*$cardiology = [
    "title"=>"Cardiology-Medgenome Labs",
    "description"=>"Genetic Testing for Cardiology in India",
    "keywords"=>"Cardiac channelopathy, Cardiomyopathy, Clopidogrel dosage, Fabry disease, Myopathy, Warfarin dosage, MYBPC3, CYP2C19, GLA, SLCO1B1, VKORC1"
];
if (trim($page_name) == "disease" && $_REQUEST['act'] == "cardiology") {
    $title =  $cardiology['title'];
    $description = $cardiology['description'];
    $keywords = $cardiology['keywords'];
}
$connective_tissue_disorders = [
    "title"=>"Connective Tissue Disorders and Skeletal Dysplasias-Medgenome Labs",
    "description"=>"Genetic Testing for Dermatology in India",
    "keywords"=>"Achondroplasia, FGFR3, Connective tissue disorder gene, Cutis-laxa gene, EhlerEctodermal dysplasia gene, Epidermolysis bullosa gene, Icthyosis gene, Oculocutaneous albinism gene, Sjogren-Larsson syndrome, ALDH3A2, Xeroderma pigmentosum Danlos syndrome, Marfan&#039;s syndrome, FBN1, Osteogenesis imperfecta gene, Pachydermoperiostosis, Skeletal dysplasia gene"
];
if (trim($page_name) == "disease" && $_REQUEST['act'] == "connective-tissue-disorder") {
    $title =  $connective_tissue_disorders['title'];
    $description = $connective_tissue_disorders['description'];
    $keywords = $connective_tissue_disorders['keywords'];
}
$dermatology = [
    "title"=>"Dermatology-Medgenome Labs",
    "description"=>"Blog
                    Stories
                    Media
                    Careers
                    Events
                    Contact
                    Sitemap
                    Dermatology
                    By Disease
                    By Disease
                    Cardiology
                    Connective ...",
    "keywords"=>""
];
if (trim($page_name) == "disease" && $_REQUEST['act'] == "dermatology") {
    $title =  $dermatology['title'];
    $description = $dermatology['description'];
    $keywords = $dermatology['keywords'];
}
$endocrinology = [
    "title"=>"Endocrinology-Medgenome Labs",
    "description"=>"Genetic Testing for Endocrinology in India",
    "keywords"=>"Androgen receptor, Adrenal hyperplasia, Congenital hypopituitarism, Kallmann syndrome, Maturity-Onset Diabetes of the Young, MODY, neonatal diabetes"
];
if (trim($page_name) == "disease" && $_REQUEST['act'] == "endocrinology") {
    $title =  $endocrinology['title'];
    $description = $endocrinology['description'];
    $keywords = $endocrinology['keywords'];
}
$ent = [
    "title"=>"ENT-Medgenome Labs",
    "description"=>"Genetic Testing for ENT in India",
    "keywords"=>"Connexin 30, GJB6, Connexin-26, GJB2, Deafness gene panel, Mondini defect, SLC26A4, Waardenburg syndrome gene"
];
if (trim($page_name) == "disease" && $_REQUEST['act'] == "ent") {
    $title =  $ent['title'];
    $description = $ent['description'];
    $keywords = $ent['keywords'];
}
$haematology = [
    "title"=>"Haematology-Medgenome Labs",
    "description"=>"Genetic Testing for Haematology in India",
    "keywords"=>"Alpha thalassemia, HBA1 and HBA2, Aplastic anemia gene, Beta thalassemia, Congenital afibrinogenemia, Congenital dyserythropoietic, Diamond blackfan anemia gene, Dyskeratosis congenita gene, Factor V Leiden mutation analysis, Factor VII deficiency gene, Fanconi anemia gene, Haemophilia, F8 and F9 gene, Hereditary elliptocytosis gene, Imerslund-Gräsbeck syndrome gene, MTHFR gene, Sickle cell anemia, HBB, Sideroblastic anaemia gene, Spherocytosis gene, Von Willebrand disease, VWF gene, Hemophagocytic lymphohistiocytosis, Primary immunodeficiency gene, Severe combined immunodeficiency gene"
];
if (trim($page_name) == "disease" && $_REQUEST['act'] == "haematology") {
    $title =  $haematology['title'];
    $description = $haematology['description'];
    $keywords = $haematology['keywords'];
}
$immunology = [
    "title"=>"Immunology-Medgenome Labs",
    "description"=>"Genetic Testing for Immunology in India",
    "keywords"=>"Agammaglobulinemia, BTK, Chediak-Higashi syndrome, LYST, Congenital neutropenia gene, Cystic fibrosis, CFTR, Hyper-immunoglobulin E Syndrome, DOCK8, STAT3"
];
if (trim($page_name) == "disease" && $_REQUEST['act'] == "immunology") {
    $title =  $immunology['title'];
    $description = $immunology['description'];
    $keywords = $immunology['keywords'];
}
$metabolic_disorders = [
    "title"=>"Metabolic Disorders-Medgenome Labs",
    "description"=>"Genetic Testing for Metabolic disorders in India",
    "keywords"=>"Citrullinemia gene, Fanconi bickel syndrome, SLC2A2, Fatty acid oxidation disorders gene, Gilbert syndrome, UGT1A1, GLUT1 deficiency, SLC2A1, Glycine encephalopathy, GLDC, Glycogen storage disorder gene, Hemochromatosis gene panel, Homocystinuria gene, Hypercholesterolemia gene, Hyperargininemia, ARG1, Leigh syndrome, mitochondrial encephalopathy gene, Maple syrup urine disease gene, McArdle disease (PYGM) gene, Menkes disease (ATP7A), Methylmalonic aciduria gene, Mucopolysaccharidosis gene, Neurometabolic disorder, MLC1, L2HGDH, MLPA, D2HGDH, MLYCD, Niemann-Pick disease gene, Organic acidemia gene, Peroxisomal disorder gene, Pompe disease (GAA), Progressive familial intrahepatic cholestasis gene, Urea cycle defects gene, Wilson disease (ATP7B) gene"
];
if (trim($page_name) == "disease" && $_REQUEST['act'] == "metabolic-disorders") {
    $title =  $metabolic_disorders['title'];
    $description = $metabolic_disorders['description'];
    $keywords = $metabolic_disorders['keywords'];
}
$miscellaneous = [
    "title"=>"Miscellaneous-Medgenome Labs",
    "description"=>"Blog
                    Stories
                    Media
                    Careers
                    Events
                    Contact
                    Sitemap
                    Miscellaneous
                    By Disease
                    By Disease
                    Cardiology
                    Connectiv...",
    "keywords"=>""
];
if (trim($page_name) == "disease" && $_REQUEST['act'] == "miscellaneous") {
    $title =  $miscellaneous['title'];
    $description = $miscellaneous['description'];
    $keywords = $miscellaneous['keywords'];
}
$nephrology = [
    "title"=>"Nephrology-Medgenome Labs",
    "description"=>"Genetic Testing for Nephrology in India",
    "keywords"=>"Alport syndrome gene, Bartter Syndrome gene, Meckel Gruber syndrome gene, Polycystic kidney disease gene, Primary hyperoxaluria gene, Xanthinuria gene, XDH"
];
if (trim($page_name) == "disease" && $_REQUEST['act'] == "nephrology") {
    $title =  $nephrology['title'];
    $description = $nephrology['description'];
    $keywords = $nephrology['keywords'];
}
$neurology = [
    "title"=>"Neurology-Medgenome Labs",
    "description"=>"Genetic Testing for Neurology in India",
    "keywords"=>"TSC1 &amp; TSC2 gene, TSC1, TSC2, Epilepsy, Benign infantile epilepsy gene, Dravet syndrome gene, SCN1A, Epileptic encephalopathy gene, Familial female mental retardation/epilepsy gene, Progressive myoclonic epilepsy gene ,Leukodystrophies, Adrenoleukodystrophy gene, Canavan disease gene, ASPA, Hypomyelination syndrome gene, Epileptic encephalopathy gene, Familial female mental retardation/epilepsy gene, Progressive myoclonic epilepsy gene, Adrenoleukodystrophy gene, Canavan disease gene, ASPA, Hypomyelination syndrome gene, Krabbe disease, GALC gene, Leukodystrophy gene, Metachromatic leukodystrophy gene, Ataxia-telangiectasia, ATM Gene, Dystonia gene, Early-onset juvenile parkinsonism gene, Episodic ataxia gene, Hyperekplexia gene, Pantothenate kinase-associated neurodegeneration, PANK2 gene, Arthrogryposis &amp; congenital myasthenic syndrome gene, Charcot-Marie-Tooth and sensory neuropathies gene, 1A/HNPP PMP22, COXI0, TEKT3, Duchenne Muscular Dystrophy, Dysferlinopathy, Spinal Muscular Atrophy, SMN1, SMN2, 4H syndrome gene, Aicardi-Goutieres syndrome gene, Cockayne syndrome gene, Congenital hydrocephalus gene, Cystic megalencephaly, Familial hemiplegic migraine gene, Hereditary spastic paraplegia gene, Rett Syndrome, MECP2, Tay–Sachs disease, Joubert syndrome gene, Lissencephaly gene, Microcephaly gene, Neuronal ceroid lipofuscinosis gene, NOTCH3 (CADASIL) gene, X-linked spastic paraplegia"
];
if (trim($page_name) == "disease" && $_REQUEST['act'] == "neurology") {
    $title =  $neurology['title'];
    $description = $neurology['description'];
    $keywords = $neurology['keywords'];
}
$oncology = [
    "title"=>"Oncology-Medgenome Labs",
    "description"=>"Genetic Testing for Oncology in India",
    "keywords"=>"Oncology, Next Generation Sequencing, Sanger Sequencing, clinical genomics"
];
if (trim($page_name) == "disease" && $_REQUEST['act'] == "oncology") {
    $title =  $oncology['title'];
    $description = $oncology['description'];
    $keywords = $oncology['keywords'];
}*/
/*$panorama = [
    "title"=>"Panorama prenatal screen",
    "description"=>"",
    "keywords"=>""
];*/
$grs = [
    "title"=>"Genomic Research Services",
    "description"=>"MedGenome Genetic Counselling Services",
    "keywords"=>"genetic conditions, genetic counsellor, Genetic Counselling appointment, assisted reproductive technology, pre-natal screening , familial/hereditary genetic disorders, discussion of genetic testing, Kumaramanickavel, Mendelian ophthalmic diseases, pediatric epidemiological and genetic projects , clinical and epidemiological research in ophthalmology"
];
if (trim($page_name) == "service") {
    $title =  $grs['title'];
    $description = $grs['description'];
    $keywords = $grs['keywords'];
}
$disease_programs = [
    "title"=>"MedGenome",
    "description"=>"",
    "keywords"=>""
];
if (trim($page_name) == "disease-program") {
    $title =  $disease_programs['title'];
    $description = $disease_programs['description'];
    $keywords = $disease_programs['keywords'];
}
$igp = [
    "title"=>"Integrated Genomics Platform (IGP) enables genetic research studies into complex human diseases",
    "description"=>"",
    "keywords"=>""
];
if (trim($page_name) == "integratedgenomicsplatform") {
    $title =  $igp['title'];
    $description = $igp['description'];
    $keywords = $igp['keywords'];
}
$oncomd = [
    "title"=>"OncoMD",
    "description"=>"",
    "keywords"=>""
];
if (trim($page_name) == "oncomd") {
    $title =  $oncomd['title'];
    $description = $oncomd['description'];
    $keywords = $oncomd['keywords'];
}
$research = [
    "title"=>"OncoMD",
    "description"=>"",
    "keywords"=>""
];
if (trim($page_name) == "oncomdresearch") {
    $title =  $research['title'];
    $description = $research['description'];
    $keywords = $research['keywords'];
}
$clinicians = [
    "title"=>"OncoMD",
    "description"=>"",
    "keywords"=>""
];
if (trim($page_name) == "oncomdclinician") {
    $title =  $research['title'];
    $description = $research['description'];
    $keywords = $research['keywords'];
}
$enterprise = [
    "title"=>"OncoMD",
    "description"=>"",
    "keywords"=>""
];
if (trim($page_name) == "oncomdenterprise") {
    $title =  $research['title'];
    $description = $research['description'];
    $keywords = $research['keywords'];
}
$partner = [
    "title"=>"OncoMD",
    "description"=>"",
    "keywords"=>""
];
if (trim($page_name) == "oncomdpartner") {
    $title =  $research['title'];
    $description = $research['description'];
    $keywords = $research['keywords'];
}
$about = [
    "title"=>"OncoMD",
    "description"=>"",
    "keywords"=>""
];
if (trim($page_name) == "oncomdabout") {
    $title =  $research['title'];
    $description = $research['description'];
    $keywords = $research['keywords'];
}
$press = [
    "title"=>"OncoMD",
    "description"=>"",
    "keywords"=>""
];
if (trim($page_name) == "oncomdpress") {
    $title =  $research['title'];
    $description = $research['description'];
    $keywords = $research['keywords'];
}

// Onco Pept
$oncopept = [
    "title"=>"OncoPept",
    "description"=>"",
    "keywords"=>""
];
if (trim($page_name) == "oncopept") {
    $title =  $oncopept['title'];
    $description = $oncopept['description'];
    $keywords = $oncopept['keywords'];
}
// Services Cloning
$services_cloning = [
    "title"=>"Cloning & Stable Cell Line Development",
    "description"=>"",
    "keywords"=>""
];
if (trim($page_name) == "services-cloning") {
    $title =  $services_cloning['title'];
    $description = $services_cloning['description'];
    $keywords = $services_cloning['keywords'];
}
// Services Certified
$services_certified = [
    "title"=>"CAP / CLIA Certified Services",
    "description"=>"",
    "keywords"=>""
];
if (trim($page_name) == "services-certified") {
    $title =  $services_certified['title'];
    $description = $services_certified['description'];
    $keywords = $services_certified['keywords'];
}
// Services Types
$services_types = [
    "title"=>"Next Generation Sequencing",
    "description"=>"",
    "keywords"=>""
];
if (trim($page_name) == "servicestypes") {
    $title =  $services_types['title'];
    $description = $services_types['description'];
    $keywords = $services_types['keywords'];
}
$ngs = [
    "title"=>"NGS Informatics",
    "description"=>"",
    "keywords"=>""
];
if (trim($page_name) == "ngs") {
    $title =  $ngs['title'];
    $description = $ngs['description'];
    $keywords = $ngs['keywords'];
}
$publications = [
    "title"=>"Publications",
    "description"=>"",
    "keywords"=>""
];
if (trim($page_name) == "publications") {
    $title =  $publications['title'];
    $description = $publications['description'];
    $keywords = $publications['keywords'];
}
///////////// OncoPept
//presentations
$presentations = [
    "title"=>"MedGenome OncoPept - Presentations",
    "description"=>"Genomic approaches of studying the tumor mutanome, immune landscape of tumors for cancer immunotherapy, Genomic solutions for Cancer",
    "keywords"=>"tumor mutanome, tumor microenvironment, checkpoint control inhibitors, Metastatic Melanoma, Squamous cell NSCLC, immuno-oncology drugs,  Immunoediting, Active immune suppression, immunomodulatory targets, checkpoint modulators, biomarkers for patient selection, combination therapies, tumor neo-epitopes, Cancer-immunity Cycle, tumor suppressive immune microenvironment, Tumor mutational burden, DNA Peptide Vaccines, Adoptive Cell Therapies, Combination Therapies, Cancer-immunity Cycle, tumor-associated neo-antigens, T-cell neo-epitope analysis, Biology of Tumors, Driver Mutations, Gene Expression Analysis, Xenograft PDx models, Exome Sequencing, RNA sequencing,  Targeted gene sequencing, Global Methylation, Small RNA Sequencing, Immunooncology Drugs,  checkpoint control inhibitors, Tumor Microenvironment, Tumor Mutation Analysis, Cancer Vaccines, Tumor Microenvironmant Modulators, Tumor Metabolism, Immune Checkpoint Inhibitors, Adoptive Cell Therapies, Combination Therapies, Immunooncology, Immunooncology Research, Biomarkers for Patient Selection, Cancer Vaccine Candidates, neo-epitope prioritization, somatic mutation pattern, Gene expression data, Tumor Tissue, Quantification of biomarkers, Head and Neck Cancer, RNA-seq data, Immune Phenotyping",

];
if (trim($page_name) == "oncopeptresources" && $_REQUEST['act'] == 'presentations') {
    $title =  $presentations['title'];
    $description = $presentations['description'];
    $keywords = $presentations['keywords'];
}

//posters
$posters = [
    "title"=>"MedGenome OncoPept - Posters",
    "description"=>"Gene expression profile of tongue and buccal cancers, Pathway identification in  T-cell inflamed tumors, Immune microenvironment of uveal melanoma and skin cutaneous melanoma, Mutational lanscape of tongue and buccal cancers, Differential Gene expression profile of tongue and buccal cancers, Biomarkers in cancer immunotherapy, Genomics approach to modelling tumors,  Tumor mutanome analysis and enriched pathways associated with higher tumor burden of M1 and M2 macrophages, Identification of tumor intrinsic and extrinsic factors promoting infiltration of G-MDSCs",
    "keywords"=>"Tongue cancer, Buccal Cancer, Vaccine candidates for tongue and buccal cancers, HNSCC, Head and Neck squamous cell carcinoma, EGFR and MET pathways, EGFR and MET gene Amplification, T-cell neoepitopes in HNSCC , RNA-Seq data, TP53 and CDKN2A  in HNSCC, Tongue and Buccal Cell Cancers, Tumor infiltrated immune cells, Mutations in T-cell inflamed tumors,  Checkpoint control inhibitors, CD8+ cells in tumor microenvironment, Head and Neck, Prostate and Melanoma, T-cell score, Microenvironmant in uveal melanoma, Microenvironmant in skin cutaneous melanoma, Skin cutaneous melanoma (SKCM), Checkpoint control inhibitors, Treg cells, NK cells, Dendritic Cells, B-cells, Myeloid-derived suppressor cells, Tumor mutational burden, Tongue cancer, Buccal Cancer, Cancer immunotherapy targets and biomarkers,  Tongue and buccal cancers, Cancer immunotherapeutics, Ipilimumab and Nivolumab, T-cell Activation, T-cell neoepitope, Immune phenotype of the tumor, Biomarkers of response, Checkpoint inhibitors, Tongue cancer, Buccal Cancer, Vaccine candidates for tongue and buccal cancers, HNSCC, Head and Neck squamous cell carcinoma, EGFR and MET pathways, EGFR and MET gene Amplification, T-cell neoepitopes in HNSCC , RNA-Seq data, TP53 and CDKN2A  in HNSCC, Tongue and Buccal Cell Cancers, Checkpoint control antibodies,  Ipilimumab and Nivolumab, Cytolytic T-cells, CTLs, T-cell receptors, Exome and RNA-Seq, Immune phenotype of the tumor, epithelial, stromal and immune cell infiltration, T-cell neoepitope, Immunooncology solution, Tumor Microenvironment, Checkpoint inhibitor, HLA-binding, Tumor microenvironment, Tumor microenvironment analyses, Immunesurveillance mechanisms, Immune suppressive pathways, T-cell infiltration, Bladder Cancer, Head and Neck Cancer, Lung Squamous, Mesothelioma, CD8 T-cells in Tumor, Pro-inflammatory cytokines, Checkpoint Control Inhibitors, CD8 T-cells, M1 and M2 macrophages, Tumor mutational burden, Macrophage infiltration, G-MDSCs, Granulocytic myeloid-derived suppressor cells, Colon Adenocarcinoma, COAD, Acute Myeloid Leukemia (AML), Stomach Adenocarcinoma (STAD), Myeloid-derived suppressor cells, T-cell Tolerance, Immune suppressive effect, Whole tumor RNA-seq data, M1 and M2 macrophages"
];
if (trim($page_name) == "oncopeptresources" && $_REQUEST['act'] == 'posters') {
    $title =  $posters['title'];
    $description = $posters['description'];
    $keywords = $posters['keywords'];
}

// products
$products = [
    "title"=>"MedGenome OncoPept - OncoPept Brochure",
    "description"=>"Genomics platform for immuno-oncology research, Immunephenotyping of the tumor microenvironment, DNA or Peptide Vaccines for Cancer Immunotherapy",
    "keywords"=>"Immuno-oncology research, Next Generation Sequencing for immuno-oncology research, NGS forimmuno-oncology research, checkpoint control inhibitors, Cancer Vaccines, Tumor microenvironment analysis, Tumor neo-epitope analysis, exome and RNA-seq data, phenotyping of the tumor
microenvironment, TCR repertoire analysis, T-cell related pathology, tumor mutanome, molecular
rationale to combination therapies, neo-antigens and neo-epitopes, Tumor microenvironment, Tumor microenvironment analyses, Checkpoint inhibitors, tumor-specific mutations, cancer bioinformatics, tumor, epithelial and stromal cells, RNA Sequencing Analysis, Gene expression scoring method, T-cell infilitration, Immune cell scoring, Gene Signature Expression Analysis, Tumor and stromal genes, Biomarker Discovery, Somatic Variant Identification, Cancer Pathways,  Tumor-specific mutant peptides, MHC-peptide binding, Neo-antigen validation, HLA-types, Cancer Variants, Neo-epitope selection,  TCR-binding mutations, DNA/Peptide Validation, T-cell Activation, patient -derived T-cells, Dendritic cells, Tumor Exome, Tumor RNA-Seq, Prioritized neo-epitope, Vaccine candidates"
];
if (trim($page_name) == "oncopeptresources" && $_REQUEST['act'] == 'products') {
    $title =  $products['title'];
    $description = $products['description'];
    $keywords = $products['keywords'];
}

// videos
$videos = [
    "title"=>"MedGenome OncoPept - Video",
    "description"=>"",
    "keywords"=>"tumor mutanome, tumor microenvironment, checkpoint control inhibitors, Metastatic Melanoma, Squamous cell NSCLC, immuno-oncology drugs,  Immunoediting, Active immune suppression, immunomodulatory targets, checkpoint modulators, biomarkers for patient selection, combination therapies, tumor neo-epitopes, Cancer-immunity Cycle, tumor suppressive immune microenvironment, Tumor mutational burden, DNA Peptide Vaccines, Adoptive Cell Therapies, Combination Therapies, Cancer-immunity Cycle, tumor-associated neo-antigens, T-cell neo-epitope analysis"
];
if (trim($page_name) == "oncopeptresources" && $_REQUEST['act'] == 'videos') {
    $title =  $videos['title'];
    $description = $videos['description'];
    $keywords = $videos['keywords'];
}

// papers
$papers = [
    "title"=>"MedGenome OncoPept - WhitePaper",
    "description"=>"Somatic NGS Analysis of Cancer",
    "keywords"=>"Sequencing of cancer genome and exome, Mutation profile of patients, Somatic analysis pipeline, CNV calling, Somatic mutation, Gene annotation, Whole exome capturing"
];
if (trim($page_name) == "oncopeptresources" && $_REQUEST['act'] == 'whitepapers') {
    $title =  $papers['title'];
    $description = $papers['description'];
    $keywords = $papers['keywords'];
}

// events
$events = [
    "title"=>"OncoPept Events",
    "description"=>"oncopept events",
    "keywords"=>"events"
];
if (trim($page_name) == "oncopeptresources" && $_REQUEST['act'] == 'events') {
    $title =  $events['title'];
    $description = $events['description'];
    $keywords = $events['keywords'];
}
$computational_biology = [
    "title"=>"Computational Biology",
    "description"=>"",
    "keywords"=>"computational biology"
];
if (trim($page_name) == "computational-biology") {
    $title =  $computational_biology['title'];
    $description = $computational_biology['description'];
    $keywords = $computational_biology['keywords'];
}
?>