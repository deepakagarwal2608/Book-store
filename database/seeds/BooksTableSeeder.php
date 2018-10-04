<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->delete();
        Book::create(array(
                    'id' =>'1',
                    'category_id' => '1',
                    'image' => 'public/TDOFG.jpg',
                    'title'=>'The Dragon Of Fortune (Geronimo Stilton And The Kingdom Of Fantasy: Special Edition #2)',
                    'description' => 'Geronimo Stilton, traveled on the wings of the Dragon of Fortune back to the Kingdom of Fantasy! He was called there by his friend Blossom, Queen of the Fairies, who needed my help.\n\nThe enchanted Winged Ring had gone missing! This was terrible news. The ring allows its owner to travel between the Kingdom of Fantasy and the real world-which would be a dangerous power if it fell into evil hands. Could he find the ring before it was too late?',
                    'qty' => '30',
                    'price' => '895',
                    'discount'=>'173'
                ));
        Book::create(array(
                    'id' =>'2',
                    'category_id' => '1',
                    'image' => 'public/Othello.jpeg',
                    'title'=>'Othello',
                    'description' => "Considered as the most painful and moving, at the same time, most powerful of Shakespeare's great tragedies, Othello, the play, trace the fall of a proud, dignified, but irresolute and vindictive Othello. He is a mere victim of lago, the most impressively evil and diabolical lago.The plot is simple- love turning sour by unfounded jealosy, lago uses this weakness of Othello as he convinces him of the infidelity of his young and beautiful wife Desdimona. The enraged Othello Kills her, only to find later the truth, and finally kills his own self as a punishment.Set throught in a domstic atmosphere, the play highlights the hairline gap that always exists between reality and appearance. On its way, it drives home themes like the challenges the confront trust, honesty, reputaion and patriarchy.",
                    'qty' => '30',
                    'price' => '95',
                    'discount'=>'0'
                ));
        Book::create(array(
                    'id' =>'3',
                    'category_id' => '1',
                    'image' => 'public/TSAHF.jpg',
                    'title'=>'The Sun And Her Flowers by Rupi Kaur',
                    'description' => 'The stunning new poetry collection from Rupi Kaur, worldwide bestselling author of milk and honey. From Rupi Kaur, the top ten Sunday Times bestselling author of milk and honey, comes her long-awaited second collection of poetry. Illustrated by Kaur, the sun and her flowers is a journey of wilting, falling, rooting, rising and blooming. It is a celebration of love in all its forms.this is the recipe of life said my mother as she held me in her arms as i wept think of those flowers you plant in the garden each year they will teach you that people too must wilt fall root rise in order to bloom',
                    'qty' => '30',
                    'price' => '499',
                    'discount'=>'140'
                ));
        Book::create(array(
                    'id' =>'4',
                    'category_id' => '1',
                    'image' => 'public/TRHOL.jpg',
                    'title'=>'The Routledge History of Literature in English',
                    'description' => 'This is a completely updated and expanded second edition of the wide-ranging and accessible Routledge History of Literature in English. It covers the main developments in the history of British and Irish literature and has extensive accompanying language notes which explore the interrelationships between language and literature. With a span from AD 600 to the present day, it emphasises the growth of literary writing, its traditions, conventions and changing characteristics, and includes literature from the margins, both geographical and cultural. Extensive quotations from poetry, prose and drama underpin the narrative.',
                    'qty' => '30',
                    'price' => '795',
                    'discount'=>'101'
                ));
        Book::create(array(
                    'id' =>'5',
                    'category_id' => '1',
                    'image' => 'public/GOST.jpg',
                    'title'=>'The God of Small Things Paperback (English)',
                    'description' => "The God of Small Things was written in the year 1997. This debut novel of the famous Indian writer, Arundhati Roy is a story about the childhood experiences of two fraternal twins. The lives of these twins are destroyed by the 'Love Laws' that that describes: who should be loved, and how. And how much. The book explains how small things affect the lives of people and their behavior. This book is a winner of the Booker Prize. It is Arundhati Roy's only novel as of 2015. It took about 4 years for Anundhati Roy to finish her Booker Prize winning book. This book was first recognized by Pankaj Mishra, who was working as an editor with Harper Collins. After sending the book to three British publishers, this book finally got published for which, Roy received 500,000 pounds in advances. The rights of this book were sold to 21 countries.",
                    'qty' => '30',
                    'price' => '450',
                    'discount'=>'109'
                ));
        Book::create(array(
                    'id' =>'6',
                    'category_id' => '2',
                    'image' => 'public/ABKI.jpg',
                    'title'=>'Adhunik Bharat Ka Itihas Paperback (Hindi) 2009',
                    'description' => "Adhunik Bharat Ka Ithihaas (Hindi) is a book that provides the readers with insights into the history of British India, and the factors that contributed to the independence of the country.
                        Summary Of The Book
                        Adhunik Bharat Ka Ithihaas (Hindi) provides the readers a great deal of information on the history of British India. This Hindi edition of History of Modern India is based on Chandra's extensive study of colonialism and nationalism in the country. Additionally, he also includes insights from well-known historians of that time frame. This book's primary focus is on the forces, institutions, and movements during this period, instead of diplomatic and military events.
                        Through the course of this book, Chandra also provides insights into the impact of British imperialism on the economic, social, and administrative life of Indian citizens. He also tells the readers about the response of Indians to this move by the British. Chandra also throws light on the political and economic scenario in the country during the 18th century, which made it possible for foreign merchants to conquer this land. The content of this book is presented in a thematic order, which helps the readers understand the material better.
                        Adhunik Bharat Ka Ithihaas (Hindi) contains insights into the factors that led to the development of a nation-wide struggle against the British rule. It also contains detailed information on the Nationalist movement, highlighting the contributions of several leaders. This book is ideal for students, and those who desire to understand the factors that brought about the independence of India.
                        About Bipan Chandra
                        Bipan Chandra is a well-known historian and author.
                        Some of Chandra's literary works include The Rise and Growth of Economic Nationalism in India: Economic Policies of Indian National Leadership, In the Name of Democracy: The JP Movement and the Emergency, and Ideology and Politics in Modern India.
                        Chandra was born in 1928, in Kangra Valley, which is now a part of Himachal Pradesh. He completed his studies at Forman Christian College, Lahore, and Stanford University, America. Chandra then finished his doctoral degree from Delhi University. He worked as a Lecturer at Hindu College, located in Delhi, and was later promoted to the position of a Reader there. He was appointed as a Professor at Jawaharlal Nehru University, New Delhi. Chandra has also been the Chairman of the National Book Trust from 2004 to 2012. He has been widely regarded as a secularist and nationalist.",
                    'qty' => '30',
                    'price' => '295',
                    'discount'=>'85'
                ));
        Book::create(array(
                    'id' =>'7',
                    'category_id' => '2',
                    'image' => 'public/T7HOH.jpg',
                    'title'=>'The 7 Habits of Highly Effective People Paperback (English) 2004',
                    'description' => "In his doctoral thesis, the author, Stephen. R. Covey, found a contrast in the self-help literature existing through generations. While the books from 1920s onwards focused on personality traits, the older books stressed on character development. The author believes that a balance must exist between the two, but he also maintains that character development is more fundamental in nature.the 7 habits of highly effective people thus focuses on the values which comprise of character ethics on which the personality ethics has to be built. These values include integrity, courage, a sense of justice and honesty. This book discusses the seven main habits which one must adopt to live a more fulfilling life. The author also takes the readers through three stages of character development.the stages of character development range from the time when a person is born and is dependent on others for survival to the time he grows and later learns to live with others. The first three habits denote the progress level from dependence to independence. The next three habits are all about interdependence and the final seventh habit deals with renewal. The 7 habits of highly effective people was published by simon & schuster ltd on 21 november 2013 and is available in paperback.key features this book was included in time magazine's list of the 25 most influential business management books over 25 million copies in 40 languages worldwide are sold",
                    'qty' => '30',
                    'price' => '599',
                    'discount'=>'311'
                ));
        Book::create(array(
                    'id' =>'8',
                    'category_id' => '2',
                    'image' => 'public/TPHOEI.jpg',
                    'title'=>'The Penguin History Of Early India: From The Origins To Ad 1300 Paperback (English) 2000',
                    'description' => 'The Penguin History Of Early India: From The Origins To AD 1300 is a fascinating book on Indian history. It has an impressive account of India and its cultural history. Anyone who is interested to know the heritage and culture of India, can refer to this book. This book will take you through a journey starting from 1200 BC when our country was different from its present scenario. This book explores the changes in the economy and the society. It throws light on Mauryan India, Mercantile community, states and cities of indo-gangetic plain and India as a peninsula. This book is a compilation of the thoughts and approach of various historians. Those who are looking forward to learn about the religious beliefs and culture of India from the very beginning must read this book and enjoy their journey through this land.',
                    'qty' => '30',
                    'price' => '399',
                    'discount'=>'40'
                ));
        Book::create(array(
                    'id' =>'9',
                    'category_id' => '2',
                    'image' => 'public/WOF.jpeg',
                    'title'=>'Wings of Fire: An Autobiography Paperback (English) 1st Edition',
                    'description' => "Wings of Fire: An Autobiography is an autobiographical novel that tells the readers a story about unlocking their inner potential. Kalam does a great deal to throw light on his journey to igniting the fire within himself. This book is divided into seven parts, and begins with an Introduction and Preface. This is then followed by an Orientation, which contains a quote from the Atharva Veda. After that, the readers are also enlightened on the incidents that made Kalam what he is today.

                        In the Orientation portion of the book, the readers are provided insights into the birth, childhood, and education of Kalam. This section covers his time at Schwartz High School and Madras Institute of Technology, as well as his middle class background in detail. The chapters that follow are ‘Creation’ and ‘Propitiation’. He also reminisces the time he had at Langley Research Center, NASA, and Wallops Flight Facility. In the chapter ‘Creation’, Kalam delves into the time when his father passed away, to him being awarded the Padma Bhushan in 1981.

                        The final chapters deal with his life as a visionary scientist, where he reminisces the role he played in the guided missile development program, and making five formidable missiles. These achievements fetched Kalam the title of the “Missile Man of India”. This autobiography comes with 24 photos taken at different times in Kalam’s life. It has also been translated into 13 languages, which include Chinese, French, Tamil, Malayalam, Gujarati, and Oriya.",
                    'qty' => '30',
                    'price' => '375',
                    'discount'=>'77'
                ));
        Book::create(array(
                    'id' =>'10',
                    'category_id' => '2',
                    'image' => 'public/HOMI.jpg',
                    'title'=>'History Of Modern India',
                    'description' => 'History of Modern India presents an authoritative overview of the history of what was known as British India. The text is largely based on the author s research on nationalism and colonialism in India and also draws from the works of eminent historians of the period. Challenging and revising colonial and nationalist interpretations of history, this book moves away from a largely political narrative to a social, economic and religious history of modern India. It explains how conditions in India during the eighteenth century helped the British East India Company establish its rule in India. It also gives us important insights into the primary aim of colonial rule which was the economic exploitation of India through trade and investment. The topics are arranged thematically in order to showcase the various forces that went into the making of independent India. However, in the entire arrangement of themes, the chronology of the period is enmeshed innovatively with the various forces that evolved both as a cause and effect of British imperialist rule of the subcontinent. The book also provides a detailed account of the nationalist movement and introduces us to the contributions of different individuals who were behind the nationalist movement. A comprehensive textbook for students of history and interested readers, History of Modern India is essential reading for a broad based understanding of the making of modern India.',
                    'qty' => '30',
                    'price' => '395',
                    'discount'=>'124'
                ));
        Book::create(array(
                    'id' =>'11',
                    'category_id' => '3',
                    'image' => 'public/GME.jpg',
                    'title'=>'GATE Mechanical Engineering 2018',
                    'description' => "This book has been prepared by a group of faculties who are highly experienced in training GATE candidates and are also subject matter experts. As a result this book would serve as a one-stop solution for any GATE aspirant to crack the examination. The book is divided into three parts covering, (1) General Aptitude, (2) Engineering Mathematics and (3) Mechanical Engineering’. Coverage is as per the syllabus prescribed for GATE and topics are handled in a comprehensive manner - beginning from the basics and progressing in a step-by-step manner supported by ample number of solved and unsolved problems. Extra care has been taken to present the content in a modular and systematic manner – to facilitate easy understanding of all topics",
                    'qty' => '30',
                    'price' => '975',
                    'discount'=>'173'
                ));
        Book::create(array(
                    'id' =>'12',
                    'category_id' => '3',
                    'image' => 'public/QAFC.jpg',
                    'title'=>'Quantitative Aptitude for Competitive Examinations (R S Aggarwal)',
                    'description' => "Ever since its release in 1989, Quantitative Aptitude has come to acquire a special place of respect among students and aspirants appearing for a wide gamut of competitive exams. Now, more than quarter of a century later, with the ever changing environment of examinations, the book too reinvents itself while being resolute to its core concept of providing the best content with easily understandable solutions. A whole lot of objective-type questions, with their solutions by shortcut methods & full coverage of every topic via fully solved examples given at the beginning of each chapter.",
                    'qty' => '30',
                    'price' => '725',
                    'discount'=>'182'
                ));
        Book::create(array(
                    'id' =>'13',
                    'category_id' => '3',
                    'image' => 'public/SHC.jpg',
                    'title'=>'SSB Head Constable (Sanchar) Bharti Pariksha 2017 paper I and II.',
                    'description' => "Sashastra Seema Bal (SSB) conducts a recruitment examination for recruitment of suitable Indian nationals to the post of Head Constable (Communication) in the SSB. The recruitment to the post of Head Constable in the SSB is done on the basis of written examination and physical test and this book has been designed for the written examination conducted by SSB.

                        The presentstudy guide for SSB Head Constable Recruitment Examination 2017 has been divided into two parts covering Paper I and Paper II, as per the syllabi of the SSB Head Constable Recruitment Examination 2017. The Paper I section covers General Knowledge, Numerical Ability, General English, General Hindi and General Reasoning whereas the Paper II section covers Communication. The communication section covers Electronic Elements in Communication, Applications of Electronic Devices, Basic Digital Electronics, Digital Logic Circuit, Television, Audio-Video System, etc.

                        Each chapter in the book contains ample number of solved problems which have been designed on the lines of questions asked in previous years’ examinations. Also each chapter ends with practice exercises which have been designed for thorough practice and preparation. At the beginning of the book, Current Affairs section has also been provided to help aspirants gets an insights into the recent events and happenings from across the globe. This book will equally be useful for SI & ASI (Communication) Recruitment Examination.

                        As the book contains ample number of solved questions along with practice material, it for sure will help the aspirants clear the SSB Head Constable written recruitment examination 2017.",
                    'qty' => '30',
                    'price' => '195',
                    'discount'=>'0'
                ));
        Book::create(array(
                    'id' =>'14',
                    'category_id' => '3',
                    'image' => 'public/IP.jpeg',
                    'title'=>'Indian Polity 5 Edition',
                    'description' => "McGraw Hill is proud to present the fifth edition of Indian Polity by M Laxmikanth. The book itself needs no introduction. It is one of the most popular and comprehensive books on the subject and has been a consistent bestseller for many years. It has become a must-read book for aspirants appearing in various competitive examinations, especially the civil services examinations. The wide range and scope of issues that it covers also makes it valuable to postgraduates, research scholars, academics and general readers who are interested in the country’s political, civil and constitutional issues. This new, fifth edition, has seven new chapters added, along with four new appendices. The extant chapters have been completely revised and updated with recent developments.",
                    'qty' => '30',
                    'price' => '720',
                    'discount'=>'170'
                ));
        Book::create(array(
                    'id' =>'15',
                    'category_id' => '3',
                    'image' => 'public/BKRI.jpeg',
                    'title'=>'Bharat Ki Rajvayvastha Indian Polity 5TH Edition M LAXMIKANTH In Hindi Medium',
                    'description' => "McGraw Hill is proud to present the fifth edition of Indian Polity by M Laxmikanth. The book itself needs no introduction. It is one of the most popular and comprehensive books on the subject and has been a consistent bestseller for many years. It has become a must-read book for aspirants appearing in various competitive examinations, especially the civil services examinations. The wide range and scope of issues that it covers also makes it valuable to postgraduates, research scholars, academics and general readers who are interested in the country’s political, civil and constitutional issues. This new, fifth edition, has seven new chapters added, along with four new appendices. The extant chapters have been completely revised and updated with recent developments.",
                    'qty' => '30',
                    'price' => '675',
                    'discount'=>'313'
                ));
        Book::create(array(
                    'id' =>'16',
                    'category_id' => '4',
                    'image' => 'public/PIFPC.jpg',
                    'title'=>'Pearson IIT Foundation Physics Class 10',
                    'description' => "Pearson IIT Foundation Series, one of the most reliable and comprehensive source of content for competitive readiness, is now thoroughly updated and redesigned to make learning more e ective and interesting for students.The core objective of this series is to help aspiring students understand the fundamental concepts with clarity, in turn, helping them to master the art of problem-solving. Hence, great care has been taken to present the concepts in a lucid manner with the help of neatly sketched illustrations and well thought-out real-life examples. As a result, this series is indispensable for any student who intends to crack high-stakes examinations such as Joint Entrance Examination (JEE), National Talent Search Examination (NTSE), Olympiads–Junior/Senior /International, Kishore Vaigyanik Protsahan Yojana (KVPY), etc. The series consists of 12 books spread across Physics, Chemistry, and Mathematics for classes VII to X.",
                    'qty' => '30',
                    'price' => '675',
                    'discount'=>'0'
                ));
        Book::create(array(
                    'id' =>'17',
                    'category_id' => '4',
                    'image' => 'public/PIFM.jpg',
                    'title'=>'Pearson IIT Foundation Maths Class 10',
                    'description' => "Pearson IIT Foundation Series, one of the most reliable and comprehensive source of content for competitive readiness, is now thoroughly updated and redesigned to make learning more e ective and interesting for students.The core objective of this series is to help aspiring students understand the fundamental concepts with clarity, in turn, helping them to master the art of problem-solving. Hence, great care has been taken to present the concepts in a lucid manner with the help of neatly sketched illustrations and well thought-out real-life examples. As a result, this series is indispensable for any student who intends to crack high-stakes examinations such as Joint Entrance Examination (JEE), National Talent Search Examination (NTSE),Olympiads–Junior/Senior /International, Kishore Vaigyanik Protsahan Yojana (KVPY), etc.The series consists of 12 books spread across Physics, Chemistry, and Mathematics for classes VII to X.",
                    'qty' => '30',
                    'price' => '600',
                    'discount'=>'93'
                ));
        Book::create(array(
                    'id' =>'18',
                    'category_id' => '4',
                    'image' => 'public/OCQB.jpg',
                    'title'=>'Oswaal CBSE Question Bank Class 9 Science (For March 2019 Exam) Chapterwise & Topicwise',
                    'description' => "CBSE always believes in Global Trends of Educational Transformation and Continual Improvement Process which means that the Board continually examines its processes and curriculum to evolve and find resonance amongst the educational fraternity. In this context, CBSE had restored Class X Board examination from the academic year 2017-18 doing away with the CCE pattern. Further to this, on 15th March 2018, CBSE released an updated curriculum for Academic Year 2018-2019 on which these latest edition of Oswaal Question Banks are based.We at Oswaal Books are always proactive to follow the changes proposed by the Board and implement the same as soon as possible to put the students, parents and teachers at ease. The Oswaal Question Banks have been modified and rewritten as per the latest Board guidelines in order to supplement the need of the students during the entire academic year!As the CBSE remodeled assessment structure is divided in two major parts namely Internal Assessment and Board Examinations, Oswaal Question Banks have been designed to assist students to prepare for their periodic tests, internal assignments as well as the Board examinations with equal ease. Oswaal Question Banks will not only help students with regular studies but will also equip the teachers with the most updated study material for the class.The Question Banks have been designed with a lot of care and attention to details. All chapters are arranged 'TOPICWISE' where each topic is explained in detail and covers all typologies of Questions specified by CBSE, with well labelled diagrams and high quality figures/diagrams for fast learning. Answers from CBSE Marking scheme are highlighted in order to specify the correct method of answering questions for attaining maximum marks. We hope to make Oswaal Question Banks a student's best companion to sail through the entire academic year smoothly.",
                    'qty' => '30',
                    'price' => '399',
                    'discount'=>'65'
                ));
        Book::create(array(
                    'id' =>'19',
                    'category_id' => '4',
                    'image' => 'public/OCQB10.jpg',
                    'title'=>'Oswaal CBSE Question Bank Class 10 Mathematics (For March 2019 Exam) Chapterwise & Topicwise',
                    'description' => "CBSE always believes in Global Trends of Educational Transformation and Continual Improvement Process which means that the Board continually examines its processes and curriculum to evolve and find resonance amongst the educational fraternity. In this context, CBSE had restored Class X Board examination from the academic year 2017-18 doing away with the CCE pattern. Further to this, on 15th March 2018, CBSE released an updated curriculum for Academic Year 2018-2019 on which these latest edition of Oswaal Question Banks are based.We at Oswaal Books are always proactive to follow the changes proposed by the Board and implement the same as soon as possible to put the students, parents and teachers at ease. The Oswaal Question Banks have been modified and rewritten as per the latest Board guidelines in order to supplement the need of the students during the entire academic year!As the CBSE remodeled assessment structure is divided in two major parts namely Internal Assessment and Board Examinations, Oswaal Question Banks have been designed to assist students to prepare for their periodic tests, internal assignments as well as the Board examinations with equal ease. Oswaal Question Banks will not only help students with regular studies but will also equip the teachers with the most updated study material for the class.The Question Banks have been designed with a lot of care and attention to details. All chapters are arranged 'TOPICWISE' where each topic is explained in detail and covers all typologies of Questions specified by CBSE, with well labelled diagrams and high quality figures/diagrams for fast learning. Answers from CBSE Marking scheme are highlighted in order to specify the correct method of answering questions for attaining maximum marks. We hope to make Oswaal Question Banks a student's best companion to sail through the entire academic year smoothly.",
                    'qty' => '30',
                    'price' => '399',
                    'discount'=>'65'
                ));
        Book::create(array(
                    'id' =>'20',
                    'category_id' => '4',
                    'image' => 'public/OCQBS.jpg',
                    'title'=>'Oswaal CBSE Question Bank Class 10 Science (For March 2019 Exam) Chapterwise & Topicwise',
                    'description' => "CBSE always believes in Global Trends of Educational Transformation and Continual Improvement Process which means that the Board continually examines its processes and curriculum to evolve and find resonance amongst the educational fraternity. In this context, CBSE had restored Class X Board examination from the academic year 2017-18 doing away with the CCE pattern. Further to this, on 15th March 2018, CBSE released an updated curriculum for Academic Year 2018-2019 on which these latest edition of Oswaal Question Banks are based.We at Oswaal Books are always proactive to follow the changes proposed by the Board and implement the same as soon as possible to put the students, parents and teachers at ease. The Oswaal Question Banks have been modified and rewritten as per the latest Board guidelines in order to supplement the need of the students during the entire academic year!As the CBSE remodeled assessment structure is divided in two major parts namely Internal Assessment and Board Examinations, Oswaal Question Banks have been designed to assist students to prepare for their periodic tests, internal assignments as well as the Board examinations with equal ease. Oswaal Question Banks will not only help students with regular studies but will also equip the teachers with the most updated study material for the class.The Question Banks have been designed with a lot of care and attention to details. All chapters are arranged 'TOPICWISE' where each topic is explained in detail and covers all typologies of Questions specified by CBSE, with well labelled diagrams and high quality figures/diagrams for fast learning. Answers from CBSE Marking scheme are highlighted in order to specify the correct method of answering questions for attaining maximum marks. We hope to make Oswaal Question Banks a student's best companion to sail through the entire academic year smoothly.",
                    'qty' => '30',
                    'price' => '399',
                    'discount'=>'65'
                ));
        Book::create(array(
                    'id' =>'21',
                    'category_id' => '5',
                    'image' => 'public/Computer Fundamentals.jpg',
                    'title'=>'Computer Fundamentals',
                    'description' => "P K Sinha designed Computer Fundamentals to introduce its readers to important concepts in Computer Science. Computer Fundamentals is written in a manner that it can be used as a textbook for many introductory courses related to IT and Computer Science. For beginners, it is useful because of its sheer simplicity and explanation of fundamentals.

                        The book has numerous illustrative diagrams, practical examples, chapter summaries, end-of-chapter questions, and a glossary of important terms. Beginners in computer science can refer to this book for guidance as it provides a clear idea about the working of the machine. The book can also be used as a self-study material due to its easy language and well-refined content.

                        The book has covered some major topics like Number systems, Computer Codes, Binary arithmetic, Boolean Algebra, and Logic Circuits. Introductions to new concepts in computing, new topics, and classifications have been added. Illustrative diagrams and lecture notes have been updated and included.",
                    'qty' => '30',
                    'price' => '360',
                    'discount'=>'115'
                ));
        Book::create(array(
                    'id' =>'22',
                    'category_id' => '5',
                    'image' => 'public/Digital Signal Processing: Principles, Algorithms, and Applications, 4e.jpg',
                    'title'=>'Digital Signal Processing: Principles, Algorithms, and Applications, 4e',
                    'description' => "This fourth edition covers the fundamentals of discrete-time signals, systems and modern digital signal processing. Appropriate for students of electrical engineering, computer engineering and computer science, the book is suitable for undergraduate and graduate courses and provides balanced coverage of both theory and practical applications.",
                    'qty' => '30',
                    'price' => '839',
                    'discount'=>'459'
                ));
        Book::create(array(
                    'id' =>'23',
                    'category_id' => '5',
                    'image' => 'public/A Textbook of Electrical Technology - Volume I.jpg',
                    'title'=>'A Textbook of Electrical Technology - Volume I',
                    'description' => "A Textbook of Electrical Technology: Volume 1” elaborately covers all the basic concepts of Electrical Engineering. 
                        The book discusses and explains various theories related to electrical engineering ranging from electric circuits to capacitors and different types of AC Circuits. The book also explains concepts of Harmonics and Fourier series. The chapters consist of various exercises, examples and multiple illustrations that aid in understanding the subject better.
                            A book which has seen, foreseen and incorporated changes in the subject for more than 50 years, it continues to be one of the most sought after texts by the students.",
                    'qty' => '30',
                    'price' => '550',
                    'discount'=>'0'
                ));
        Book::create(array(
                    'id' =>'24',
                    'category_id' => '5',
                    'image' => 'public/Calculus and Analytic Geometry.jpg',
                    'title'=>'Calculus and Analytic Geometry',
                    'description' => "An Introduction to Analytic Geometry and Calculus covers the basic concepts of analytic geometry and the elementary operations of calculus. This book is composed of 14 chapters and begins with an overview of the fundamental relations of the coordinate system. The next chapters deal with the fundamentals of straight line, nonlinear equations and graphs, functions and limits, and derivatives. These topics are followed by a discussion of some applications of previously covered mathematical subjects. This text also considers the fundamentals of the integrals, trigonometric functions, exponential and logarithm functions, and methods of integration. The final chapters look into the concepts of parametric equations, polar coordinates, and infinite series. This book will prove useful to mathematicians and undergraduate and graduate mathematics students.",
                    'qty' => '30',
                    'price' => '899',
                    'discount'=>'135'
                ));
        Book::create(array(
                    'id' =>'25',
                    'category_id' => '5',
                    'image' => 'public/Industrial Engineering and Management (2018-2019) Session by O.P. Khanna.jpg',
                    'title'=>'Industrial Engineering and Management (2018-2019) Session by O.P. Khanna',
                    'description' => "O.P. Khanna’s Industrial Engineering and Management 17th Edition is a comprehensive book for undergraduates of Mechanical Engineering or Industrial Engineering streams. It covers all the theory behind Industrial management, Plant Layout, Production Planning and Control, Work and Motion Study, Personnel Management and the financial aspects of industries. The book is indispensable to students taking up the GATE exam as well as regular practitioners.",
                    'qty' => '30',
                    'price' => '375',
                    'discount'=>'0'
                ));
        Book::create(array(
                    'id' =>'26',
                    'category_id' => '6',
                    'image' => 'public/TPTB.jpg',
                    'title'=>'The PCOD - Thyroid Book - Compiled From Women & the Weight Loss Tamasha',
                    'description' => "The PCOD - Thyroid Book is a book that is written to help you leave behind the heritage of health, just like your grandmother did for your mother and everyone in the family. The PCOD - Thyroid Book also tells us that it is not easy to leave behind a inheritance of health and harmony - we must first make that in our lives. That requires making time for ourselves, be it for exercise, to eat right, or simply to nap. This book is about captivating charge of ourselves, thank our bodies and making peace with the fact that it's not the hormones, it's us. What can we do about our food, sleep, exercise and relationships that will make us feel fine, help us conquer the conditions of PCOD and Hypothyroid, and most importantly get off drugs and stay off them for betterThis work of fiction is a must read for avid readers",
                    'qty' => '30',
                    'price' => '225',
                    'discount'=>'35'
                ));
        Book::create(array(
                    'id' =>'27',
                    'category_id' => '6',
                    'image' => 'public/Robbins & Cotran - Pathologic Basis Of Disease (Set Of 2 Volumes) 1St Edition.jpg',
                    'title'=>'public/Robbins & Cotran - Pathologic Basis Of Disease (Set Of 2 Volumes) 1St Edition',
                    'description' => "Dependable, current and complete, this perennially bestselling text is one that youll use long after your medical student days are behind you. A world class author team delivers the latest, most essential pathology knowledge in a readable, interesting manner, ensuring optimal understanding of the latest basic science and clinical content. High-quality photographs and full color illustrations highlight new information in molecular biology, disease classifications, new drugs and drug therapies and much more.",
                    'qty' => '30',
                    'price' => '2545',
                    'discount'=>'240'
                ));
        Book::create(array(
                    'id' =>'28',
                    'category_id' => '6',
                    'image' => 'public/TOMLT.jpg',
                    'title'=>'Textbook Of Medical Laboratory Technology, 3Ed, 2 Vols.',
                    'description' => "Textbook of Medical Laboratory Technology (Set of 2 Volumes) is a comprehensive set of two books for undergraduate students of Medicine. The book comprises chapters on clinical biochemistry, clinical microbiology, hematology, molecular biology and cytogenetics, histopathology and cytogenetics techniques. In addition, the book consists of several illustrations and diagrams for better understanding of the concepts. This book is essential for students of Biotechnology and Molecular Biology.",
                    'qty' => '30',
                    'price' => '2695',
                    'discount'=>'0'
                ));
        Book::create(array(
                    'id' =>'29',
                    'category_id' => '6',
                    'image' => 'public/CMH.jpg',
                    'title'=>'Community Mental Health In India',
                    'description' => "• First comprehensive book on Community Mental Health in India.
                        • Addresses multiple and diverse aspects of public mental health including history, prevention of mental disorder, role of gender, stigma, legislation and psychoeducation; learning disability, child, adult and old age perspectives`; mental health emergencies in the community, medical anthropology including eco-psychiatry, farmer suicides, and homelessness; patient and carer perspectives; and clinical and research strategies.
                        • Ensures the voices of multiple stake holders for providing health care in the community are represented. In doing so, the book steer clear of generating a simplistic linear and homogeneous history. It traces multiple and diverse paths in the development and practice of community mental health in India from both within and outside the profession.
                        • Offers an appreciation of both rural and urban sensitivities; and addresses both local and global dimensions of mental health in the community.
                        • Appeals to a wide audience including professionals from psychiatry, psychology, psychiatric social work, public health, health policy, social sciences including medical anthropology, and those involved with human rights and legal aspects of community mental health.
                        • Establishes a dialogue between mental health and social sciences within India.",
                    'qty' => '30',
                    'price' => '2625',
                    'discount'=>'509'
                ));
        Book::create(array(
                    'id' =>'30',
                    'category_id' => '6',
                    'image' => 'public/Ph.jpg',
                    'title'=>'Pharmaceutics-Ii (Ro)',
                    'description' => "Covers prescription, latin terms as calculations, pharmaceutical incompabilities, posology, powders, monophasic liquid dosage forms, additives in drugs forms suspension, etc.",
                    'qty' => '30',
                    'price' => '207',
                    'discount'=>'0'
                ));
        Book::create(array(
                    'id' =>'31',
                    'category_id' => '7',
                    'image' => 'public/MG.jpg',
                    'title'=>'My Gita',
                    'description' => "In My Gita, acclaimed mythologist Devdutt Pattanaik demystifies The Bhagavad Gita for the contemporary reader. His unique approach thematic rather than verse-by-verse makes the ancient treatise eminently accessible, combined as it is with his trademark illustrations and simple diagrams. In a world that seems spellbound by argument over dialogue, vi-vaad over sam-vaad, Devdutt highlights how Krishna nudges Arjuna to understand rather than judge his relationships. This becomes relevant today when we are increasingly indulging and isolating the self (self-improvement, self-actualization, self-realization even selfies!). We forget that we live in an ecosystem of others, where we can nourish each other with food, love and meaning, even when we fight. So let My Gita inform your Gita.",
                    'qty' => '30',
                    'price' => '295',
                    'discount'=>'59'
                ));
        Book::create(array(
                    'id' =>'32',
                    'category_id' => '7',
                    'image' => 'public/ER.jpg',
                    'title'=>'The Essential Rumi Paperback (English) 2013',
                    'description' => "The Essential Rumi Paperback (English) 2013 is a translation of Rumi's selected poems by the author. The author has included a new introduction in this book along with 81 never read before poems of Rumi-the 13th century poet. In this book, you will discover the mysticism of Rumi's poetry and their beauty. The poems are at once poignant and beautiful. The book is a must have for all poetry lovers and will definitely become an instant favourite for anyone who reads it. The book contains some of the best poems by the master poet and you will enjoy reading it. The poetry will stay with you longa after you put the book down. The Essential Rumi Paperback (English) 2013 is a must have book for everyone.",
                    'qty' => '30',
                    'price' => '499',
                    'discount'=>'89'
                ));
        Book::create(array(
                    'id' =>'33',
                    'category_id' => '7',
                    'image' => 'public/TS.jpg',
                    'title'=>'THE SECRET 1st Edition',
                    'description' => "In 2006, a groundbreaking feature-length film revealed the great mystery of the universe - The Secret - and, later that year, Rhonda Byrne followed with a book that became a worldwide bestseller.
                        Fragments of a Great Secret have been found in the oral traditions, in literature, in religions and philosophies throughout the centuries. For the first time, all the pieces of The Secret come together in an incredible revelation that will be life-transforming for all who experience it.
                        In this book, you'll learn how to use The Secret in every aspect of your life - money, health, relationships, happiness, and in every interaction you have in the world. You'll begin to understand the hidden, untapped power that's within you, and this revelation can bring joy to every aspect of your life.
                        The Secret contains wisdom from modern-day teachers - men and women who have used it to achieve health, wealth, and happiness. By applying the knowledge of The Secret, they bring to light compelling stories of eradicating disease, acquiring massive wealth, overcoming obstacles, and achieving what many would regard as impossible.",
                    'qty' => '30',
                    'price' => '425',
                    'discount'=>'131'
                ));
        Book::create(array(
                    'id' =>'34',
                    'category_id' => '7',
                    'image' => 'public/HTWF.jpg',
                    'title'=>'How To Win Friends and Influence People',
                    'description' => "Be pleased with a great reading time with the help of this book, How To Win Friends And Influence People which comes from the house of Pirates. The scenarios accounted in it are intriguing and will keep you at the edge of your seat as well as keep you enthralled till its end. The book and its scenarios concentrate on letting your mind wander and relax. Every page of this book is successful at inculcating the happiness of a good read in us. This excellent piece can be opted as a brilliant gifting option to the book lovers you know as well. You would love to see the smile on their faces when they receive it. It is a work of Dale Carnegie.",
                    'qty' => '30',
                    'price' => '125',
                    'discount'=>'10'
                ));
        Book::create(array(
                    'id' =>'35',
                    'category_id' => '7',
                    'image' => 'public/TORWT.jpg',
                    'title'=>'The Original Rider Waite Tarot Deck',
                    'description' => "First issued in 1910, the Rider-Waite Tarot is almost certainly the most widely used tarot card deck in the world. There are 78 tarot cards, divided into the Major and Minor Arcanas, designed by Pamela Colman Smith in accordance with A. E Waite's instructions. An instructional booklet by A. E. Waite is included, explaining the tarot card meanings and how to use the cards for divination, with an introduction by Stuart R. Kaplan.",
                    'qty' => '30',
                    'price' => '1120',
                    'discount'=>'143'
                ));
    }
}
