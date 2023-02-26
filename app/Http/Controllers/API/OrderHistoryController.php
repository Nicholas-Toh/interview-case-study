<?php

namespace App\Http\Controllers\API;

use App\Enums\DocumentType;
use App\Http\Controllers\ResourceController;
use App\Http\Requests\ShowDocumentRequest;
use App\Models\Document;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderHistoryController extends ResourceController
{
    public function index(Request $request) {
        return Document::with(['line_items'])
            ->whereHas('line_items')
            ->whereCustomerId(Auth::id())
            ->whereDocumentType(DocumentType::SalesOrder)
            ->paginate($request->input('limit', $this->limit));
    }

    public function show(Document $document, ShowDocumentRequest $request) {
        return $document->load(['line_items']);
    }
}
