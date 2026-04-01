<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        $site = config('site');
        $whatsappDigits = preg_replace('/\D+/', '', (string) data_get($site, 'contact.whatsapp'));
        $whatsappMessage = rawurlencode((string) data_get($site, 'contact.whatsapp_message'));
        $structuredData = json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'LocalBusiness',
            'name' => $site['brand']['name'],
            'description' => $site['meta']['description'],
            'areaServed' => $site['contact']['location'],
            'telephone' => $site['contact']['phone'] ?: null,
            'email' => $site['contact']['email'] ?: null,
            'url' => config('app.url'),
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

        return view('pages.home', [
            'site' => $site,
            'structuredData' => $structuredData,
            'serviceOptions' => array_column($site['services'], 'name'),
            'hasWhatsapp' => $whatsappDigits !== '',
            'whatsappUrl' => $whatsappDigits !== ''
                ? "https://wa.me/{$whatsappDigits}?text={$whatsappMessage}"
                : '#contacto',
        ]);
    }
}
