<?php

require_once("qbocrest_controller.php");

class ControllerAPIQuasarByteOCRestV1Product extends QuasarByteOCRestController
{
    protected function getFilterData()
    {
        $filter_data = array();

        if (isset($this->request->get['filter_category_id'])) {
            $filter_data['filter_category_id'] = $this->request->get['filter_category_id'];
        }

        if (isset($this->request->get['filter_filter'])) {
            $filter_data['filter_filter'] = $this->request->get['filter_filter'];
        }

        if (isset($this->request->get['filter_name'])) {
            $filter_data['filter_name'] = $this->request->get['filter_name'];
        }

        if (isset($this->request->get['filter_description'])) {
            $filter_data['filter_description'] = $this->request->get['filter_description'];
        }

        if (isset($this->request->get['filter_tag'])) {
            $filter_data['filter_tag'] = $this->request->get['filter_tag'];
        }

        if (isset($this->request->get['sort'])) {
            $filter_data['sort'] = $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $filter_data['order'] = $this->request->get['order'];
        }

        if (isset($this->request->get['start'])) {
            $filter_data['start'] = $this->request->get['start'];
        }

        if (isset($this->request->get['limit'])) {
            $filter_data['limit'] = $this->request->get['limit'];
        }

        return $filter_data;
    }

    public function count()
    {
        return 0;
    }

    public function findAll()
    {
        $this->changeErrorHandler();
        $this->load->language('api/quasarbyte/ocrest/v1/product');

        $this->checkAuthorisation();

        $this->load->model('catalog/product');
        $this->load->model('tool/image');

        $products = $this->model_catalog_product->getProducts($this->getFilterData());

        foreach ($products as $product) {
            if ($product['image']) {
//                $output .= '<url>';
//                $output .= '<loc>' . $this->url->link('product/product', 'product_id=' . $product['product_id']) . '</loc>';
//                $output .= '<changefreq>weekly</changefreq>';
//                $output .= '<priority>1.0</priority>';
//                $output .= '<image:image>';
//                $output .= '<image:loc>' . $this->model_tool_image->resize($product['image'], $this->config->get('config_image_popup_width'), $this->config->get('config_image_popup_height')) . '</image:loc>';
//                $output .= '<image:caption>' . $product['name'] . '</image:caption>';
//                $output .= '<image:title>' . $product['name'] . '</image:title>';
//                $output .= '</image:image>';
//                $output .= '</url>';
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($products));
    }
}
