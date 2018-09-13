<!doctype html>
<html lang="en">
	<head>
		<?php
		require 'config/config.php';
		//$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$url = basename($_SERVER['PHP_SELF']);
		$page_name = basename($url, ".php").PHP_EOL;
		$title = "";
		$description = "";
		$keywords = "";

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
		if (trim($page_name) == "media") {
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

		$cardiology = [
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
		}
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
		/*$oncomd = [
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
		$enterprise = [
			"title"=>"OncoMD",
			"description"=>"",
			"keywords"=>""
		];
		$partner = [
			"title"=>"OncoMD",
			"description"=>"",
			"keywords"=>""
		];
		$about = [
			"title"=>"OncoMD",
			"description"=>"",
			"keywords"=>""
		];
		$press = [
			"title"=>"OncoMD",
			"description"=>"",
			"keywords"=>""
		];*/
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
		/*$ngs = [
			"title"=>"NGS Informatics",
			"description"=>"",
			"keywords"=>""
		];*/
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
		$questionnaire = [
			"title"=>"Bioinformatics Trainee",
			"description"=>"",
			"keywords"=>""
		];
		if (trim($page_name) == "questionnaire") {
			$title =  $questionnaire['title'];
			$description = $questionnaire['description'];
			$keywords = $questionnaire['keywords'];
		}
		?>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<?php if(isset($title)){?><title><?php echo $title;?></title><?php } ?>
		<?php if(isset($description)){?><meta name="description" content="<?php echo $description;?>" /><?php } ?>
		<?php if(isset($keywords)){?><meta name="keywords" content="<?php echo $keywords;?>" /><?php } ?>
		<link rel="icon" href="<?php echo $site_path;?>/img/logo/favicon.png">
		<link rel="stylesheet" href="<?php echo $site_path;?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo $site_path;?>/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo $site_path;?>/css/custom.css">
		<?php if (trim($page_name) == "oncopept") {?>
        <link rel="stylesheet" href="<?php echo $site_path;?>/oncopept/css/custom.css">
		<?php } ?>
        <link rel="stylesheet" href="<?php echo $site_path;?>/igp/css/custom.css">
        <script src="<?php echo $site_path;?>/js/angular.min.js"></script>
   	</head>
	<body>
    	<!--<div class="topheader navbar navbar-fixed-top">-->
		<div class="wrapper top-section1 hidden-xs">
			<div class="container">
				<div class="col-sm-8">
					<ul class="social">
						<a href="https://www.facebook.com/MedGenomeGenomics/" target="_blank"><li class="fa fa-facebook"></li></a>
						<a href="https://twitter.com/MedGenomeLabs" target="_blank"><li class="fa fa-twitter"></li></a>
						<a href="#"><li class="g-plus"></li></a>
						<a href="https://www.linkedin.com/company/medgenome-labs-pvt-ltd" target="_blank"><li class="fa fa-linkedin"></li></a>
						<a href="https://www.youtube.com/channel/UCfKNyHEEHerCRyXcnY8SXRQ/feed" target="_blank"><li class="fa fa-youtube"></li></a>
					</ul>
				</div>
				<div class="col-sm-16 text-right">
					<ul class="top-menu">
						<li><a href="https://medgenomelabs.wordpress.com/" target="_blank">Blog</a></li>
						<li><a href="<?php echo $site_path;?>/stories.php">Stories </a></li>
						<li><a href="<?php echo $site_path;?>/media.php?year=2016&month=july">Media</a></li>
						<li><a href="<?php echo $site_path;?>/careers.php">Careers  </a></li>
						<li><a href="<?php echo $site_path;?>/events.php">Events</a></li>
						<li><a href="<?php echo $site_path;?>/sitemap.php">Sitemap</a></li>
						<li><a href="<?php echo $site_path;?>/contactus.php">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container top-second hidden-xs">
			<div class="col-sm-8 logo">
				<a href="<?php echo $site_path;?>/index.php"><img src="<?php echo $site_path;?>/img/logo/logo.png"></a>
			</div>
			<div class="col-sm-16 contact text-right">
				<ul>
					<li class="mob">
						<h6>TOLL FREE</h6>
						<a href="tel:1800-102-8401">1800 102 8401</a>
					</li>
					<li class="mail">
						<h6>Email Us</h6>
						<a href="mailto:contact@medgenome.com">contact@medgenome.com</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="wrapper nav-section1">
			<div class="container">
				<div class="logo visible-xs"><a href="<?php echo $site_path;?>/index.php"><img src="<?php echo $site_path;?>/img/logo/logo.png"></a></div>
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav hidden-xs hidden-sm">
							<li class="drop-down"><a href="#">About Us</a>
								<ul class="drop-down-menu ">
									<li><a href="<?php echo $site_path;?>/company.php">Company</a></li>
									<li><a href="<?php echo $site_path;?>/management.php">Management</a></li>
									<li><a href="<?php echo $site_path;?>/directors.php">Directors</a></li>
									<li><a href="<?php echo $site_path;?>/advisors.php">Advisors</a></li>
									<li><a href="<?php echo $site_path;?>/investors.php">Our Investors</a></li>
									<li><a href="<?php echo $site_path;?>/medgenome-iec.php">MedGenome Institutional Ethics Committee (MG-IEC)</a></li>
								</ul>
							</li>
							<li class="drop-down"><a href="#">Clinical Genomics</a>
								<ul  class="drop-down-menu ">
									<li class="sub-drop-down clearfix"><a href="#">By Disease</a>
										<span class="glyphicon glyphicon-menu-right"></span>
										<ul class="sub-drop-down-menu">
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=cardiology" id="top_menu_cardiology">Cardiology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=connective-tissue-disorder">Connective Tissue Disorder</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=dermatology" id="top_menu_dermatology">Dermatology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=endocrinology" id="top_menu_endocrinology">Endocrinology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=ent" id="top_menu_ent">ENT</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=haematology" id="top_menu_haematology">Haematology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=immunology" id="top_menu_immunology">Immunology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=metabolic-disorders" id="top_menu_metabolic-disorders">Metabolic Disorders</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=miscellaneous" id="top_menu_miscellaneous">Miscellaneous</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=nephrology" id="top_menu_nephrology">Nephrology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=neurology" id="top_menu_neurology">Neurology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=oncology" id="top_menu_oncology">Oncology</a></li>
                                        </ul>
									</li>
									<li><a href="http://medgenomenipt.com/" target="_blank">Non-Invasive Prenatal Test</a></li>
								</ul>
							</li>
							<li class="drop-down">
								<a href="<?php echo $site_path;?>/service.php">Genomic Research Services</a>
								<ul class="drop-down-menu">
									<li><a href="<?php echo $site_path;?>/disease-program.php">Disease Programs</a></li>
									<li><a href="<?php echo $site_path;?>/integratedgenomicsplatform.php">Integrated Genomics Platform</a></li>
									<li class="sub-drop-down clearfix">
										<a href="#">Genomic Solutions</a>
										<span class="glyphicon glyphicon-menu-right"></span>
										<ul class="sub-drop-down-menu">
											<li><a href="<?php echo $site_path;?>/oncomd.php">OncoMD</a></li>
											<li><a href="<?php echo $site_path;?>/oncopept.php">OncoPept</a></li>
										</ul>
									</li>
									<li><a href="<?php echo $site_path;?>/ngs.php">NGS Informatics</a></li>
									<li><a href="<?php echo $site_path;?>/publications.php">Publications</a></li>
								</ul>
							</li>
							<li><a href="http://genomeasia100k.com/" target="_blank">GenomeAsia 100K </a></li>

						</ul>
						<ul class="nav navbar-nav visible-xs visible-sm">
							<li class=""><a href="#">About Us</a>
								<ul class="mob-submenu">
									<li><a href="<?php echo $site_path;?>/company.php">Company</a></li>
									<li><a href="<?php echo $site_path;?>/management.php">Management</a></li>
									<li><a href="<?php echo $site_path;?>/directors.php">Directors</a></li>
									<li><a href="<?php echo $site_path;?>/advisors.php">Advisors</a></li>
									<li><a href="<?php echo $site_path;?>/investors.php">Our Investors</a></li>
									<li><a href="<?php echo $site_path;?>/medgenome-iec.php">MedGenome Institutional Ethics Committee (MG-IEC)</a></li>
								</ul>
							</li>
							<li><a href="#">Clinical Genomics</a>
								<ul  class="mob-submenu">
									<li class="clearfix"><a href="#">- By Disease</a>
                                          <ul class="sub-drop-down-menu">
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=cardiology" id="top_menu_cardiology">Cardiology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=connective-tissue-disorder">Connective Tissue Disorder</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=dermatology" id="top_menu_dermatology">Dermatology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=endocrinology" id="top_menu_endocrinology">Endocrinology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=ent" id="top_menu_ent">ENT</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=haematology" id="top_menu_haematology">Haematology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=immunology" id="top_menu_immunology">Immunology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=metabolic-disorders" id="top_menu_metabolic-disorders">Metabolic Disorders</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=miscellaneous" id="top_menu_miscellaneous">Miscellaneous</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=nephrology" id="top_menu_nephrology">Nephrology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=neurology" id="top_menu_neurology">Neurology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=oncology" id="top_menu_oncology">Oncology</a></li>
                                          </ul>
									</li>
									<li><a href="#">- Non-Invasive Prenatal Test</a></li>
								</ul>
							</li>
							<li class="visible-xs visible-sm">
								<a href="<?php echo $site_path;?>/service.php">Genomic Research Services</a>
								<ul class="mob-submenu">
									<li><a href="<?php echo $site_path;?>/disease-program.php">- Disease Programs</a></li>
									<li><a href="<?php echo $site_path;?>/integratedgenomicsplatform.php">- Integrated Genomics Platform</a></li>
									<li class=" clearfix">
										<a href="#">- Genomic Solutions</a>
										<ul class="mob-submenu">
											<li><a href="<?php echo $site_path;?>/oncomd.php">- OncoMD</a></li>
											<li><a href="<?php echo $site_path;?>/oncopept.php">- OncoPept</a></li>
										</ul>
									</li>
									<li><a href="<?php echo $site_path;?>/ngs.php">- NGS Informatics</a></li>
									<li><a href="<?php echo $site_path;?>/publications.php">- Publications</a></li>
								</ul>
							</li>
							<li><a href="http://genomeasia100k.com/" target="_blank">GenomeAsia 100K </a></li>

						</ul>
					</div>
				</nav>
				<div class="col-md-5 col-sm-8 search-wrap hidden-xs pull-right" >
					<input type="text" class="form-control">
					<div class="search"><i class="fa fa-search"></i>
					</div>

				</div>
			</div>
		</div>
        	<!--</div>-->
		



	