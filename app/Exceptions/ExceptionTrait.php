<?php
namespace App\Exceptions;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpFoundation\Response;
trait ExceptionTrait
{
    public function apiException($request,$e)
    {
        if ($this->isModel($e)) {
            return $this->Exception_Response($e,'Model Not Found');
        }
        if ($this->isHttp($e)) {
            return $this->Exception_Response($e,'Incorrect Route');
        }
        return parent::render($request, $e);
    }

    protected function isModel($e)
    {
        return $e instanceof ModelNotFoundException;
    }

    protected function isHttp($e)
    {
        return $e instanceof NotFoundHttpException;
    }

    protected function Exception_Response($e,$message){
        return response()->json([
            'errors' => $message
        ],Response::HTTP_NOT_FOUND);
    }
}