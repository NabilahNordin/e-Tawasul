<x-filament-panels::page>

<style>
    .cr-page { min-height: 100vh; background: #fff; }

    /* ── Header ── */
    .cr-header {
        background: transparent;
        border-bottom: 1px solid #e5e2db;
        position: sticky; top: 0; z-index: 20;
    }
    .cr-header-inner {
        max-width: 860px; margin: 0 auto;
        padding: 14px 32px;
        display: flex; align-items: center; justify-content: space-between;
    }
    .cr-header-title { font-size: 14px; font-weight: 600; color: #1e1b18; }
    .cr-back-link {
        font-size: 13px; color: #8a8479;
        text-decoration: none;
        display: flex; align-items: center; gap: 5px;
        transition: color 0.2s;
    }
    .cr-back-link:hover { color: #1e1b18; }

    /* ── Hero band ── */
    .cr-hero {
        background: transparent;
        padding: 36px 32px;
        position: relative; overflow: hidden;
    }
    .cr-hero-inner { max-width: 860px; margin: 0 auto; display: flex; align-items: center; gap: 16px; }
    .cr-hero::before {
        content: '';
        position: absolute; right: -60px; top: -60px;
        width: 200px; height: 200px; border-radius: 50%;
        background: rgba(255,255,255,0.05); pointer-events: none;
    }
    .cr-hero::after {
        content: '';
        position: absolute; right: 80px; bottom: -50px;
        width: 130px; height: 130px; border-radius: 50%;
        background: rgba(255,255,255,0.04); pointer-events: none;
    }
    .cr-hero-icon {
        width: 40px; height: 40px; flex-shrink: 0;
        background: rgba(191,58,14,0.10);
        border-radius: 10px;
        display: flex; align-items: center; justify-content: center;
    }
    .cr-hero-icon svg { width: 18px; height: 18px; color: #bf3a0e; }
    .cr-hero h1 { font-size: 20px; font-weight: 700; color: #1e1b18; margin: 0; line-height: 1.2; }
    .cr-hero p  { font-size: 13px; color: #6b6560; margin: 4px 0 0; }

    /* ── Notice bar ── */
    .cr-notice-bar { background: #fffbf5; border-bottom: 1px solid #f0dbb8; }
    .cr-notice-bar-inner {
        max-width: 860px; margin: 0 auto;
        padding: 12px 32px;
        display: flex; align-items: flex-start; gap: 10px;
        font-size: 13px; color: #7a5220; line-height: 1.5;
    }
    .cr-notice-bar-inner svg { width: 14px; height: 14px; flex-shrink: 0; margin-top: 1px; color: #c47d2a; }

    /* ── Main layout ── */
    .cr-main { max-width: 860px; margin: 0 auto; padding: 40px 32px 80px; }

    /* ── Section ── */
    .cr-section { margin-bottom: 40px; }
    .cr-section-head {
        display: flex; align-items: center; gap: 10px;
        margin-bottom: 20px;
        padding-bottom: 12px;
        border-bottom: 1px solid #e5e2db;
    }
    .cr-section-title { font-size: 13px; font-weight: 700; color: #1e1b18; letter-spacing: 0.06em; text-transform: uppercase; }
    .cr-section-desc { font-size: 12px; color: #9c9589; margin-left: auto; }

    /* ── Fields ── */
    .cr-grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
    @media (max-width: 580px) { .cr-grid-2 { grid-template-columns: 1fr; } }
    .cr-field { margin-bottom: 20px; }
    .cr-field:last-child { margin-bottom: 0; }

    .cr-label {
        display: block;
        font-size: 12px; font-weight: 600;
        color: #6b6560;
        text-transform: uppercase; letter-spacing: 0.06em;
        margin-bottom: 7px;
    }
    .cr-label .req { color: #bf3a0e; }

    .cr-input[readonly] { background: #f7f5f2; color: #9c9589; cursor: default; }

    .cr-input, .cr-select, .cr-textarea {
        width: 100%; box-sizing: border-box;
        border: 1px solid #e2ddd6;
        border-radius: 8px;
        padding: 10px 14px;
        font-size: 14px; color: #1e1b18;
        background: #fff;
        transition: border-color 0.2s, box-shadow 0.2s;
        outline: none;
        appearance: none;
        -webkit-appearance: none;
    }
    .cr-input:focus, .cr-select:focus, .cr-textarea:focus {
        border-color: #bf3a0e;
        box-shadow: 0 0 0 3px rgba(191,58,14,0.09);
    }
    .cr-input::placeholder, .cr-textarea::placeholder { color: #c5bfb8; }
    .cr-textarea { resize: none; line-height: 1.6; }

    .cr-select-wrap { position: relative; }
    .cr-select-wrap::after {
        content: '';
        position: absolute; right: 13px; top: 50%;
        transform: translateY(-50%);
        width: 0; height: 0;
        border-left: 4px solid transparent;
        border-right: 4px solid transparent;
        border-top: 5px solid #9c9589;
        pointer-events: none;
    }
    .cr-select { padding-right: 34px; cursor: pointer; }

    .cr-input-icon { position: relative; }
    .cr-input-icon svg {
        position: absolute; left: 12px; top: 50%;
        transform: translateY(-50%);
        width: 14px; height: 14px; color: #bfb9af; pointer-events: none;
    }
    .cr-input-icon .cr-input { padding-left: 36px; }

    .cr-error { font-size: 11px; color: #bf3a0e; margin-top: 5px; }

    /* ── Sub-type panels ── */
    .cr-subpanel {
        background: #fff;
        border: 1px solid #e5e2db;
        border-radius: 10px;
        padding: 20px 22px;
        margin-bottom: 20px;
    }
    .cr-subpanel-label {
        font-size: 11px; font-weight: 600;
        text-transform: uppercase; letter-spacing: 0.08em;
        display: flex; align-items: center; gap: 6px;
        margin-bottom: 16px;
    }
    .cr-subpanel-label svg { width: 12px; height: 12px; }
    .cr-subpanel-label--amber { color: #8a5a1e; }
    .cr-subpanel-label--red   { color: #9b2c20; }
    .cr-subpanel-label--blue  { color: #2a4e8a; }

    /* ── Checkbox ── */
    .cr-checkbox-row { display: flex; align-items: center; gap: 10px; cursor: pointer; }
    .cr-checkbox-row input[type="checkbox"] {
        width: 16px; height: 16px; flex-shrink: 0;
        accent-color: #bf3a0e; cursor: pointer;
    }
    .cr-checkbox-row span { font-size: 13px; color: #4a453f; }

    /* ── Upload ── */
    .cr-upload {
        border: 1.5px dashed #d9d3cb;
        border-radius: 10px;
        padding: 22px;
        text-align: center;
        cursor: pointer;
        background: #fff;
        transition: border-color 0.2s, background 0.2s;
    }
    .cr-upload:hover { border-color: #bf3a0e; background: #fdf6f2; }
    .cr-upload svg { width: 18px; height: 18px; color: #c5bfb8; margin: 0 auto 8px; display: block; }
    .cr-upload p { margin: 0; font-size: 13px; color: #6b6560; }
    .cr-upload small { font-size: 11px; color: #9c9589; margin-top: 3px; display: block; }
    .cr-upload--active p { color: #2d7a47; }

    /* ── Consent ── */
    .cr-consent {
        background: #f2f6fe;
        border: 1px solid #c8d9f0;
        border-radius: 10px;
        padding: 18px 20px;
    }
    .cr-consent-label { display: flex; align-items: flex-start; gap: 12px; cursor: pointer; }
    .cr-consent-label input[type="checkbox"] {
        width: 16px; height: 16px; flex-shrink: 0;
        margin-top: 2px; accent-color: #bf3a0e; cursor: pointer;
    }
    .cr-consent-title {
        font-size: 13px; font-weight: 600; color: #2a4e8a;
        display: flex; align-items: center; gap: 5px; margin-bottom: 5px;
    }
    .cr-consent-title svg { width: 13px; height: 13px; }
    .cr-consent-body { font-size: 12px; color: #4a6494; line-height: 1.6; }

    /* ── Divider ── */
    .cr-divider { border: none; border-top: 1px solid #e5e2db; margin: 32px 0; }

    /* ── Actions ── */
    .cr-actions { display: flex; gap: 12px; align-items: center; justify-content: space-between; }
    .cr-btn-cancel {
        padding: 11px 28px;
        border: 1px solid #e2ddd6;
        background: #fff; color: #6b6560;
        border-radius: 8px; font-size: 14px; font-weight: 500;
        text-decoration: none; cursor: pointer;
        transition: background 0.2s, color 0.2s;
        display: inline-flex; align-items: center; justify-content: center;
    }
    .cr-btn-cancel:hover { background: #faf9f7; color: #1e1b18; }
    .cr-btn-submit {
        padding: 11px 36px;
        border: none; border-radius: 8px;
        font-size: 14px; font-weight: 600;
        cursor: pointer;
        display: inline-flex; align-items: center; justify-content: center; gap: 8px;
        transition: background 0.2s;
    }
    .cr-btn-submit--active { background: #bf3a0e; color: #fff; }
    .cr-btn-submit--active:hover { background: #a63309; }
    .cr-btn-submit--disabled { background: #ede9e3; color: #b5b0a8; cursor: not-allowed; }

    /* ── Submitted success banner ── */
    .cr-submitted-banner {
        background: #f0faf4;
        border: 1px solid #a3d9b5;
        border-radius: 12px;
        padding: 28px 28px;
        display: flex; align-items: flex-start; gap: 16px;
        margin-bottom: 32px;
    }
    .cr-submitted-icon {
        width: 40px; height: 40px; flex-shrink: 0;
        background: #2d7a47;
        border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
    }
    .cr-submitted-icon svg { width: 20px; height: 20px; color: #fff; }
    .cr-submitted-title { font-size: 15px; font-weight: 700; color: #1a4d2e; margin: 0 0 6px; }
    .cr-submitted-body  { font-size: 13px; color: #3a6b4a; line-height: 1.6; margin: 0; }
    .cr-submitted-back {
        display: inline-flex; align-items: center; gap: 6px;
        margin-top: 14px;
        padding: 9px 22px;
        background: #2d7a47; color: #fff;
        border-radius: 8px; font-size: 13px; font-weight: 600;
        text-decoration: none; transition: background 0.2s;
    }
    .cr-submitted-back:hover { background: #235e38; }

    /* ── Disabled form overlay ── */
    .cr-form-disabled { pointer-events: none; opacity: 0.5; user-select: none; }
</style>

<div class="cr-page">

    {{-- Sticky header --}}
    <header class="cr-header">
        <div class="cr-header-inner">
            <span class="cr-header-title">Crisis Report</span>
            <a href="{{ \App\Filament\Pages\KinDashboard::getUrl() }}" class="cr-back-link">
                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                </svg>
                Back to Dashboard
            </a>
        </div>
    </header>

    {{-- Hero band --}}
    <div class="cr-hero">
        <div class="cr-hero-inner">
            <div class="cr-hero-icon">
                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                </svg>
            </div>
            <div>
                <h1>Crisis Report Submission</h1>
                <p>Report an emergency or crisis situation to university staff</p>
            </div>
        </div>
    </div>

    {{-- Notice bar --}}
    <div class="cr-notice-bar">
        <div class="cr-notice-bar-inner">
            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            Your report will be securely submitted and verified by university staff. All information is confidential and handled with care.
        </div>
    </div>

    <main class="cr-main">

        @if($cf_submitted)
        {{-- Success banner --}}
        <div class="cr-submitted-banner">
            <div class="cr-submitted-icon">
                <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <div>
                <p class="cr-submitted-title">Report Submitted Successfully</p>
                <p class="cr-submitted-body">Your crisis report has been submitted to the university administration. Staff will review and follow up with you as soon as possible.</p>
                <a href="{{ \App\Filament\Pages\KinDashboard::getUrl() }}" class="cr-submitted-back">
                    <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                    </svg>
                    Back to Dashboard
                </a>
            </div>
        </div>
        @endif

        <form wire:submit.prevent="submitCrisisReport" enctype="multipart/form-data" class="{{ $cf_submitted ? 'cr-form-disabled' : '' }}">

            {{-- Section 1: Basic Info --}}
            <div class="cr-section">
                <div class="cr-section-head">
                    <span class="cr-section-title">Basic Information</span>
                    <span class="cr-section-desc">Required fields marked *</span>
                </div>
                <div class="cr-grid-2">
                    <div class="cr-field">
                        <label class="cr-label">Student ID / Matric No.</label>
                        <input type="text" wire:model="cf_matricNo" class="cr-input" readonly />
                        @error('cf_matricNo') <p class="cr-error">{{ $message }}</p> @enderror
                    </div>
                    <div class="cr-field">
                        <label class="cr-label">Crisis Type <span class="req">*</span></label>
                        <div class="cr-select-wrap">
                            <select wire:model.live="cf_crisisType" class="cr-select">
                                <option value="">Select crisis type</option>
                                <option value="Natural Disaster">Natural Disaster</option>
                                <option value="Accident">Accident</option>
                                <option value="Illness">Illness</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        @error('cf_crisisType') <p class="cr-error">{{ $message }}</p> @enderror
                    </div>
                </div>
            </div>

            {{-- Section 2: Crisis Details (conditional) --}}
            @if($cf_crisisType)
            <div class="cr-section">
                <div class="cr-section-head">
                    <span class="cr-section-title">Crisis Details</span>
                </div>

                @if($cf_crisisType === 'Natural Disaster')
                <div class="cr-subpanel">
                    <p class="cr-subpanel-label cr-subpanel-label--amber">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/>
                        </svg>
                        Natural Disaster Details
                    </p>
                    <div class="cr-field">
                        <label class="cr-label">Disaster Sub-Type <span class="req">*</span></label>
                        <div class="cr-select-wrap">
                            <select wire:model="cf_disasterSubType" class="cr-select">
                                <option value="">Select disaster type</option>
                                <option value="Flood">Flood</option>
                                <option value="Earthquake">Earthquake</option>
                                <option value="Landslide">Landslide</option>
                                <option value="Tsunami">Tsunami</option>
                                <option value="Wildfire">Wildfire</option>
                                <option value="Storm / Cyclone">Storm / Cyclone</option>
                                <option value="Drought">Drought</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        @error('cf_disasterSubType') <p class="cr-error">{{ $message }}</p> @enderror
                    </div>
                </div>
                @endif

                @if($cf_crisisType === 'Accident')
                <div class="cr-subpanel">
                    <p class="cr-subpanel-label cr-subpanel-label--red">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Accident Details
                    </p>
                    <div class="cr-grid-2 cr-field">
                        <div>
                            <label class="cr-label">Date &amp; Time <span class="req">*</span></label>
                            <input type="datetime-local" wire:model="cf_incidentDateTime" class="cr-input" />
                            @error('cf_incidentDateTime') <p class="cr-error">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label class="cr-label">Accident Location <span class="req">*</span></label>
                            <input type="text" wire:model="cf_location" placeholder="e.g., Campus Library" class="cr-input" />
                            @error('cf_location') <p class="cr-error">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="cr-field">
                        <label class="cr-checkbox-row">
                            <input type="checkbox" wire:model.live="cf_wasHospitalized" />
                            <span>The student was admitted to a hospital</span>
                        </label>
                    </div>
                    @if($cf_wasHospitalized)
                    <div class="cr-field">
                        <label class="cr-label">Hospital Name <span class="req">*</span></label>
                        <input type="text" wire:model="cf_hospitalName" placeholder="e.g., Hospital Sultanah Aminah" class="cr-input" />
                        @error('cf_hospitalName') <p class="cr-error">{{ $message }}</p> @enderror
                    </div>
                    @endif
                </div>
                @endif

                @if($cf_crisisType === 'Illness')
                <div class="cr-subpanel">
                    <p class="cr-subpanel-label cr-subpanel-label--blue">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Illness Details
                    </p>
                    <div class="cr-field">
                        <label class="cr-label">Illness Type <span class="req">*</span></label>
                        <input type="text" wire:model="cf_illnessType"
                            placeholder="e.g., COVID-19, Dengue Fever, Mental Health Crisis" class="cr-input" />
                        @error('cf_illnessType') <p class="cr-error">{{ $message }}</p> @enderror
                    </div>
                    <div class="cr-field">
                        <label class="cr-label">
                            Medical Letter
                            <span style="font-size:11px;color:#9c9589;text-transform:none;letter-spacing:0;font-weight:400;"> (optional)</span>
                        </label>
                        <div class="cr-upload {{ $cf_medicalLetter ? 'cr-upload--active' : '' }}"
                             onclick="document.getElementById('medical-letter-input').click()">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                            </svg>
                            @if($cf_medicalLetter)
                                <p>{{ $cf_medicalLetter->getClientOriginalName() }}</p>
                                <small>Click to replace</small>
                            @else
                                <p>Click to upload medical letter</p>
                                <small>PDF, JPG, PNG, DOC — max 10 MB</small>
                            @endif
                        </div>
                        <input id="medical-letter-input" type="file" wire:model="cf_medicalLetter"
                            accept=".pdf,.jpg,.jpeg,.png,.doc,.docx" class="hidden" />
                        @error('cf_medicalLetter') <p class="cr-error">{{ $message }}</p> @enderror
                    </div>
                </div>
                @endif

                @if($cf_crisisType !== 'Accident')
                <div class="cr-field">
                    <label class="cr-label">Location <span class="req">*</span></label>
                    <div class="cr-input-icon">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <input type="text" wire:model="cf_location"
                            placeholder="e.g., Campus Library, Hostel Block A, Off-campus"
                            class="cr-input" />
                    </div>
                    @error('cf_location') <p class="cr-error">{{ $message }}</p> @enderror
                </div>
                @endif
            </div>
            @endif

            {{-- Section 3: Description --}}
            <div class="cr-section">
                <div class="cr-section-head">
                    <span class="cr-section-title">Description</span>
                </div>
                <div class="cr-field">
                    <label class="cr-label">Describe the crisis <span class="req">*</span></label>
                    <textarea wire:model="cf_description" rows="5"
                        placeholder="Provide as much detail as possible — what happened, when, who was affected, and any immediate steps already taken..."
                        class="cr-textarea"></textarea>
                    @error('cf_description') <p class="cr-error">{{ $message }}</p> @enderror
                </div>
            </div>

            {{-- Section 4: Supporting Documents --}}
            <div class="cr-section">
                <div class="cr-section-head">
                    <span class="cr-section-title">Supporting Documents</span>
                    <span class="cr-section-desc">Optional</span>
                </div>
                <div class="cr-field">
                    <label class="cr-label">
                        Attachments
                        <span style="font-size:11px;color:#9c9589;text-transform:none;letter-spacing:0;font-weight:400;"> — MC, Police Report, photos, etc.</span>
                    </label>
                    <div class="cr-upload {{ ($cf_supportingDocs && count($cf_supportingDocs) > 0) ? 'cr-upload--active' : '' }}"
                         onclick="document.getElementById('supporting-docs-input').click()">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                        </svg>
                        @if($cf_supportingDocs && count($cf_supportingDocs) > 0)
                            <p>{{ count($cf_supportingDocs) }} file(s) selected</p>
                            <small>Click to change</small>
                        @else
                            <p>Click to upload supporting documents</p>
                            <small>PDF, JPG, PNG, DOC — max 10 MB per file</small>
                        @endif
                    </div>
                    <input id="supporting-docs-input" type="file" wire:model="cf_supportingDocs"
                        accept=".pdf,.jpg,.jpeg,.png,.doc,.docx" multiple class="hidden" />
                    @error('cf_supportingDocs.*') <p class="cr-error">{{ $message }}</p> @enderror
                </div>
            </div>

            <hr class="cr-divider">

            {{-- Consent --}}
            <div class="cr-consent" style="margin-bottom: 28px;">
                <label class="cr-consent-label" for="crisis-consent">
                    <input type="checkbox" wire:model.live="cf_consent" id="crisis-consent" />
                    <div>
                        <p class="cr-consent-title">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Consent to Share with Sejahtera Clinic / Staff
                        </p>
                        <p class="cr-consent-body">
                            I authorise the university to share relevant information from this report with Sejahtera Clinic and authorised staff members for verification and support purposes.
                        </p>
                    </div>
                </label>
                @error('cf_consent') <p class="cr-error" style="margin-top:8px;margin-left:28px;">{{ $message }}</p> @enderror
            </div>

            {{-- Actions --}}
            <div class="cr-actions">
                <a href="{{ \App\Filament\Pages\KinDashboard::getUrl() }}" class="cr-btn-cancel">Cancel</a>
                <button type="submit"
                    class="cr-btn-submit {{ $cf_submitted ? 'cr-btn-submit--disabled' : 'cr-btn-submit--active' }}"
                    {{ $cf_submitted ? 'disabled' : '' }}>
                    Submit Crisis Report
                </button>
            </div>

        </form>
    </main>
</div>

</x-filament-panels::page>
