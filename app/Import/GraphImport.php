<?php

namespace App\Import;

use Maatwebsite\Excel\Exceptions\LaravelExcelException;
use \Maatwebsite\Excel\Files\ExcelFile;

class GraphImport extends ExcelFile
{
    const EXCEL_FILENAME = 'excel-data-file';

    /**
     * Get file
     * @return string
     * @throws LaravelExcelException
     */
    public function getFile(): string
    {
        $request = request();
        $isPreview = (bool) $request->input('is-preview');

        if(!$isPreview) {
            // TODO save file to storage
        }

        if ($request->hasFile(self::EXCEL_FILENAME)) {
            $file = $request->file(self::EXCEL_FILENAME);
            return $file->path();
        }

        throw new LaravelExcelException('Cannot find file');
    }
}