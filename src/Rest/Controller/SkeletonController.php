<?php

namespace Rest\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;
use Zend\View\Renderer\JsonRenderer;
use Zend\Http\Response;

class SkeletonController extends AbstractRestfulController
{
    public function getList()
    {      
        try {
            $jsonModel = new JsonModel();
            $this->response->setStatusCode(Response::STATUS_CODE_200);
            $this->response->getHeaders()->addHeaderLine('Content-Type: application/json; charset=utf-8');
            $jsonModel->setVariables(array
                (
                    'WholeMushPookah'   => 'Everything',
                    'More Everything'   => array('test',1,2,3,4,5,6)
                ));
            return  $jsonModel;
        } catch (Exception $e) {
        
            $this->response->setStatusCode(Response::STATUS_CODE_500);
            $this->response->getHeaders()->addHeaderLine('Content-Type: application/json; charset=utf-8');
            $jsonModel->setVariables(array(
                    'Error' => $e->getMessage(),
                    'Trace' => $e->getTraceAsString()
            ));
            return $jsonModel;
        }
    }
 
    public function get($id)
    {       
        try {
            $jsonModel = new JsonModel();
            $this->response->setStatusCode(Response::STATUS_CODE_200);
            $this->response->getHeaders()->addHeaderLine('Content-Type: application/json; charset=utf-8');
            $jsonModel->setVariables(array
                (
                    'jsonVarName' => 'SomeValue',
                    'jsonArray'   => array('test',1,2,3,4,5,6)
                ));
            return  $jsonModel;
        } catch (Exception $e) {
        
            $this->response->setStatusCode(Response::STATUS_CODE_500);
            $this->response->getHeaders()->addHeaderLine('Content-Type: application/json; charset=utf-8');
            $jsonModel->setVariables(array(
                    'Error' => $e->getMessage(),
                    'Trace' => $e->getTraceAsString()
            ));
            return $jsonModel;
        }
    }
 
    public function create($data)
    {
        try {
            $jsonModel = new JsonModel();
            $this->response->setStatusCode(Response::STATUS_CODE_201);
            $this->response->getHeaders()->addHeaderLine('Content-Type: application/json; charset=utf-8');
            return $jsonModel;
        } catch (Exception $e) {
            
            $this->response->setStatusCode(Response::STATUS_CODE_500);
            $this->response->getHeaders()->addHeaderLine('Content-Type: application/json; charset=utf-8');
            $jsonModel->setVariables(array(
                    'Error' => $e->getMessage(),
                    'Trace' => $e->getTraceAsString()
            ));   
            return $jsonModel;      
        }
    }
 
    public function update($id, $data)
    {
        try {
            $jsonModel = new JsonModel();
            $this->response->setStatusCode(Response::STATUS_CODE_405);
            $this->response->getHeaders()->addHeaderLine('Content-Type: application/json; charset=utf-8');
            $jsonModel->setVariables(array(
                    'response' => 'Put Not Implemented'
            ));
            return $jsonModel;
        } catch (Exception $e) {
            
            $this->response->setStatusCode(Response::STATUS_CODE_500);
            $this->response->getHeaders()->addHeaderLine('Content-Type: application/json; charset=utf-8');
            $jsonModel->setVariables(array(
                    'Error' => $e->getMessage(),
                    'Trace' => $e->getTraceAsString()
            ));   
            return $jsonModel;  
        }
    }
 
    public function delete($id)
    {
        try {
            $jsonModel = new JsonModel();
            $this->response->setStatusCode(Response::STATUS_CODE_200);
            $this->response->getHeaders()->addHeaderLine('Content-Type: application/json; charset=utf-8');
            return $jsonModel;
        } catch (Exception $e) {
            
            $this->response->setStatusCode(Response::STATUS_CODE_500);
            $this->response->getHeaders()->addHeaderLine('Content-Type: application/json; charset=utf-8');
            $jsonModel->setVariables(array(
                    'Error' => $e->getMessage(),
                    'Trace' => $e->getTraceAsString()
            ));   
            return $jsonModel;  
        }
    }
}
