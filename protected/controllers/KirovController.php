<?php

class KirovController extends Controller
{

    public function actionIndex()
    {
        $translit['message'] = '';
        if (!empty($_POST['text']))
        {
            $translit['message'] = kirov::transliterate($_POST['text']);
        }

        $this->render('kirov', $translit);

    }

}