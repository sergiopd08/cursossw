<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Curso;

class CorreoCursos extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $cursos;

    public function __construct(Curso $cursos)
    {
        //$this->cursos = $cursos;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return "Prueba de correo";
    }
}
