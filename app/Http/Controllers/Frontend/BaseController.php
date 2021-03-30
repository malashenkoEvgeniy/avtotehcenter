<?php


namespace App\Http\Controllers\Frontend;


use App\Models\Category;
use App\Models\Contact;
use App\Models\FormRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class BaseController
{
    public function __construct(){
        $menu_categories = Category::all();
        $page_on_menu = Page::all();
        $contact = Contact::first();
        view()->share(compact('menu_categories', 'page_on_menu', 'contact'));
    }

    public function sendForm(Request $request)
    {

        $contacts = Contact::first();

        $req = request()->except('_token', '_method');

        $req['is_new'] = true;

        $to = $contacts->email;

        if ($to !== null) {
            $title = 'Нужна консультация';

            $message_header = '
                <html>
                    <head>
                        <title>Консультация</title>
                        <meta charset="utf8">
                    </head>
                    <body>'
            ;

            $message_body = '';

            if (isset($req['phone'])) {
                $message_body .= '<p>Телефон:  ' . $req['phone'] . '</p>';
            }
            if (isset($req['name'])) {
                $message_body .= '<p>Имя:  ' . $req['name'] . '</p>';
            }
            if (isset($req['body'])) {
                $message_body .= '<p>Комментарий:  ' . $req['body'] . '</p>';
            }
            if (isset($req['page'])) {
                $message_body .= '<p>Страница:  ' . $req['page'] . '</p>';
            }

            if (isset($req['product_name'])) {
                $message_body .= '<p>Страница:  ' . $req['product_name'] . '</p>';
            }
            $message_footer = '
                    </body>
                </html>';

            $headers[] = 'MIME-Version: 1.0';
            $headers[] = 'Content-type: text/html; charset=utf8';
            $headers[] = 'To: Receiver <' . $to . '>';
            $headers[] = 'From: FertigHaus <test@test.com>';
            mail($to, $title, $message_header . $message_body . $message_footer, implode("\r\n", $headers));
        }

        $form_request = FormRequest::create($req);
    }
}
