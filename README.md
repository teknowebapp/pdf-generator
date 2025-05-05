# PDF Generator

A simple PDF generation system using CodeIgniter 3. Supports two main features:

## Features

- Generate PDF from CodeIgniter views
- Display PDF directly in the browser (inline or download)
- Automatically save PDF files to a specified server directory
- Lightweight and easy to integrate

## Requirements

- PHP 7+
- CodeIgniter 3
- [dompdf/dompdf](https://github.com/dompdf/dompdf) (via Composer)

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/teknowebapp/pdf-generator.git
   cd pdf-generator
   ```

2. Install dependencies via Composer

    ```bash
    composer require dompdf/dompdf
    ```

3. Load the `Generator` and `PDF` library in your controller:

    ```php
    $this->load->library('pdf');
    $this->load->library('generator');
    ```

## Usage

1. Display PDF in Browser

   ```php
   $this->pdf->setPaper('A4', 'potrait');
   $this->pdf->filename = 'course-' . date('d-m-Y') . '.pdf';
   $this->pdf->generate('generator', $data);
   ```

2. Save PDF to Server

   ```php
   $html = $this->load->view('generator', $data, true);
   $filename = 'course-' . $student . ' - ' . $periode . '.pdf';
   $this->generator->save($html, $filename, 'A4', 'portrait');
   ```

## Contributing

Contributions are welcome! Feel free to fork the repository and submit a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
