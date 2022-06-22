// Generate PDF
    public function createPDF() {
        // retreive all records from db
        $data =article::all();
        PDF::setOptions([
            "defaultFont" => "Courier",
            "defaultPaperSize" => "a4",
            "dpi" => 130
        ]);
        // share data to view
        view()->share('article',$data);
        $pdf = PDF::loadView('pdf_view', $data);

        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
      }
