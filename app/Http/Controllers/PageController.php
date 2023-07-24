<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\TemplateProcessor;

class PageController extends Controller
{
    public function index()
    {
        $imageData = Image::latest()->first();

        return view('index', compact('imageData'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutIndex()
    {
        $imageData = Image::latest()->first();

        return view('pages.about-page', compact('imageData'));
    }

    public function imageStore(Request $request)
    {
        $data = new Image();

        $validated = $request->validate([
            'image' => 'required',
        ]);

        if (request()->has('image')) {
            $imageuploaded = request()->file('image');
            $imagename = time() . '_' . $imageuploaded->getClientOriginalName();
            $imagepath = public_path('/upload/image/');
            $imageuploaded->move($imagepath, $imagename);
            $data['image'] = $imagename;
        }

        $data->save();

        return redirect()->back();
    }

    public function downloadWordFile()
    {
        // Create a new PhpWord instance
        $phpWord = new PhpWord();

        // Add a new section to the document
        $section = $phpWord->addSection();

        // Add content to the section (you can customize this as needed)
        $section->addText('Ms. Yu Nandar Moe', ['bold' => true]);
        $section->addText('Build 12, Room 8, Pha.Sa.Pa.La');
        $section->addText('Mingalar Taung Nyunt Tsp, Yangon, Myanmar');
        $section->addText('Phone: +95943184522, E-mail - yunandarmoe31@gmail.com');
        $section->addLine(['weight' => 1, 'width' => 450, 'height' => 0]); // Add a horizontal line

        // Add a new section for personal details
        $section->addText('PERSONAL PARTICULARS', ['bold' => true, 'color' => '1E5792', 'underline' => 'single']);
        $section->addText('Date of Birth: 31/12/1998');
        $section->addText('Nationality: Myanmar');
        $section->addText('Gender: Female');
        $section->addTextBreak();

        // Add a new section for education
        $section->addText('EDUCATION', ['bold' => true, 'color' => '1E5792', 'underline' => 'single']);
        $section->addText('High School Certificate – Distinction in Mathematics, Physics, Chemistry and Biology (2015) No.3, Basic Education High School, Mingalar Taung Nyunt Township ');
        $section->addText('Yangon University of Foreign Languages (B.A.English) (2015 - 2019)');
        $section->addText('Professional Diploma in Business Management (2019 - 2020) Myanmar Management Institute, Yangon');
        $section->addTextBreak();

        // Add a new section for professional development
        $section->addText('PROFESSIONAL DEVELOPMENT', ['bold' => true, 'color' => '1E5792', 'underline' => 'single']);
        $section->addText('Certificate in Japanese Language Proficiency Test N2 (July, 2018)');
        $section->addText('Certificate in Business Japanese Proficiency Test (Score:397, J3) (September, 2022)');
        $section->addText('Certificate of Java SE Online Course (November, 2022)');
        $section->addText('Certificate of IP (Information Technology Passport Examination) (April, 2023)');
        $section->addTextBreak();

        // Add a new section for computer skill
        $section->addText('COMPUTER SKILLS', ['bold' => true, 'color' => '1E5792', 'underline' => 'single']);
        $section->addText('Microsoft Word, Microsoft PowerPoint, Microsoft Excel');
        $section->addTextBreak();

        // Add a new section for language skill
        $section->addText('LANGUAGE SKILLS', ['bold' => true, 'color' => '1E5792', 'underline' => 'single']);
        $section->addText('English Language Skill, Japanese Language Skill');
        $section->addTextBreak();

        // Add a new section for programming skill
        $section->addText('PROGRAMMING SKILLS', ['bold' => true, 'color' => '1E5792', 'underline' => 'single']);
        $section->addText('HTML, CSS, jQuery, JavaScript, VueJs, PHP (Laravel Framework)');
        $section->addTextBreak();

        // Add a new section for work experience
        $section->addPageBreak();
        $section->addText('WORK EXPERIENCES', ['bold' => true, 'color' => '1E5792', 'underline' => 'single']);
        $section->addText('Assistant Teacher at GETC (April 2019 - May 2019)', ['bold' => true]);
        $section->addText('- Responsible for preparing classroom equipment and materials for lessons');
        $section->addText('- Collaborate with teachers and parents');
        $section->addText('- Support students in their learning');
        $section->addTextBreak();

        $section->addText('Assistant Admin and Translator at ARTIC (January 2020 - March 2021)', ['bold' => true]);
        $section->addText('- Responsible for translation in English and Japanese languages');
        $section->addText('- Keeping meeting minutes and handling vouchers concern with project');
        $section->addText('- Inputting data into a computer and processing bank transfer');
        $section->addText('- Preparing Letter Head to Ministry of Education Department');
        $section->addTextBreak();

        $section->addText('Web Developer and Communicator (April 2021 - April 2023)', ['bold' => true]);
        $section->addText('- Designed and developed the Japanese customer’s website projects using HTML, CSS, Bootstrap for one year in frontend team');
        $section->addText('- Carry out quality assurance tests to discover errors and optimize usability');
        $section->addText('- Responsible for translating customer’s instruction from Japanese to Burmese language');
        $section->addText('- Responsible for translating design documents and explain to the members');
        $section->addText('- Attend the Japanese customer’s meeting and interpreted between customer and member');
        $section->addText('- Trained and gave some instructions of web template to over 20 OJT trainees from online training ');
        $section->addText('- Worked in the backend team and responsible for developing the CRUD using PHP Laravel Framework and renovating the design using JavaScript or jQuery, AlpineJs, Ajax review codes and testing the program to find bugs');
        $section->addTextBreak();


        // Add a new section for cover letter
        $section->addPageBreak();
        $section->addText('COVER LETTER', ['bold' => true, 'color' => '1E5792', 'underline' => 'single']);
        $section->addText('Dear Sir or Madam');
        $section->addText('This letter is to express my interest in the job posted on your website. With my relevant experience and education, I am confident to apply for this position. ');
        $section->addText('As soon as I graduated in 2020, I worked at the INGO Japanese based company as Assistant Admin and Translator for one year. I had a responsible to translate the office documents from English to Japanese, handled the vouchers and petty cash daily, attended the monthly meetings and created meeting minutes and interpreted between Japanese CEO and Myanmar members.');
        $section->addText('After that, I changed working as Web Developer and Communicator which I worked at Metateam Myanmar IT company. During one year, as a Front-end developer, I have designed and developed and launched customize, highly responsive websites using HTML, CSS, jQuery, Bootstrap for the Japanese customer’s projects. As the communicator, I was able to use my specialized skill as a responsible for translating some customer’s instruction documents from Japanese to Burmese language and carry out quality assurance tests to discover errors and bugs. And I trained and reviewed web basic templates to over 20 trainees from online training course. ');
        $section->addText('I also worked as the backend developer using PHP Laravel Framework after one year in Frontend team and sometimes using JavaScript, jQuery for renovating the design and AlpineJs and Ajax for the Single Page Application, CRUD. This professional experience helps me to improve my programming languages and language skills. It provides me with extensive knowledge of how to develop web pages and quickly solve the errors. Also, I attended the customer’s meeting and interpreted between customer and member, then translated the design documents and explained to the members.');
        $section->addText('Please review my CV for additional details and give me a chance to participate in the organization, so I will give you back the best trustworthy and energetic skills that you want. If you wish to interview me, please contact me at any time. ');
        $section->addText('Thank you for your time and consideration. I hope to hear from you soon. ');
        $section->addText('Yours sincerely ');
        $section->addText('Yu Nandar Moe');

        // Save the generated Word file to a temporary location
        $tempFilePath = storage_path('app/public/temp_file.docx');
        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save($tempFilePath);

        // Download the file and provide a custom file name
        $fileName = 'YuNandarMoe_CV_' . date('Ymd') . '.docx';
        return response()->download($tempFilePath, $fileName)->deleteFileAfterSend(true);
    }
}
