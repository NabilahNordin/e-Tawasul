<x-filament-panels::page>

<div style="min-height: 100vh; background: #fff;">

    {{-- Sticky header --}}
    <header style="background: transparent; border-bottom: 1px solid #e5e2db; position: sticky; top: 0; z-index: 20;">
        <div style="max-width: 860px; margin: 0 auto; padding: 14px 32px; display: flex; align-items: center; justify-content: space-between;">
            <span style="font-size: 14px; font-weight: 600; color: #1e1b18;">Crisis Report</span>
            <a href="{{ \App\Filament\Pages\KinDashboard::getUrl() }}" style="font-size: 13px; color: #8a8479; text-decoration: none; display: flex; align-items: center; gap: 5px;" onmouseover="this.style.color='#1e1b18'" onmouseout="this.style.color='#8a8479'">
                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                </svg>
                Back to Dashboard
            </a>
        </div>
    </header>

    {{-- Hero band --}}
    <div style="background: transparent; padding: 36px 32px; position: relative; overflow: hidden;">
        <div style="max-width: 860px; margin: 0 auto; display: flex; align-items: center; gap: 16px;">
            <div style="width: 40px; height: 40px; flex-shrink: 0; background: rgba(191,58,14,0.10); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="width: 18px; height: 18px; color: #bf3a0e;">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                </svg>
            </div>
            <div>
                <h1 style="font-size: 20px; font-weight: 700; color: #1e1b18; margin: 0; line-height: 1.2;">Crisis Report Submission</h1>
                <p style="font-size: 13px; color: #6b6560; margin: 4px 0 0;">Report an emergency or crisis situation to university staff</p>
            </div>
        </div>
    </div>

    {{-- Notice bar --}}
    <div style="background: #fffbf5; border-bottom: 1px solid #f0dbb8;">
        <div style="max-width: 860px; margin: 0 auto; padding: 12px 32px; display: flex; align-items: flex-start; gap: 10px; font-size: 13px; color: #7a5220; line-height: 1.5;">
            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="width: 14px; height: 14px; flex-shrink: 0; margin-top: 1px; color: #c47d2a;">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            Your report will be securely submitted and verified by university staff. All information is confidential and handled with care.
        </div>
    </div>

    <main style="max-width: 860px; margin: 0 auto; padding: 40px 32px 80px;">

        @if($cf_submitted)
        {{-- Success banner --}}
        <div style="background: #f0faf4; border: 1px solid #a3d9b5; border-radius: 12px; padding: 28px 28px; display: flex; align-items: flex-start; gap: 16px; margin-bottom: 32px;">
            <div style="width: 40px; height: 40px; flex-shrink: 0; background: #2d7a47; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" style="width: 20px; height: 20px; color: #fff;">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <div>
                <p style="font-size: 15px; font-weight: 700; color: #1a4d2e; margin: 0 0 6px;">Report Submitted Successfully</p>
                <p style="font-size: 13px; color: #3a6b4a; line-height: 1.6; margin: 0;">Your crisis report has been submitted to the university administration. Staff will review and follow up with you as soon as possible.</p>
                <a href="{{ \App\Filament\Pages\KinDashboard::getUrl() }}" style="display: inline-flex; align-items: center; gap: 6px; margin-top: 14px; padding: 9px 22px; background: #2d7a47; color: #fff; border-radius: 8px; font-size: 13px; font-weight: 600; text-decoration: none;" onmouseover="this.style.background='#235e38'" onmouseout="this.style.background='#2d7a47'">
                    <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                    </svg>
                    Back to Dashboard
                </a>
            </div>
        </div>
        @endif

        <form wire:submit.prevent="submitCrisisReport" enctype="multipart/form-data" style="{{ $cf_submitted ? 'pointer-events: none; opacity: 0.5; user-select: none;' : '' }}">

            {{-- Section 1: Basic Info --}}
            <div style="margin-bottom: 40px;">
                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid #e5e2db;">
                    <span style="font-size: 13px; font-weight: 700; color: #1e1b18; letter-spacing: 0.06em; text-transform: uppercase;">Basic Information</span>
                    <span style="font-size: 12px; color: #9c9589; margin-left: auto;">Required fields marked *</span>
                </div>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-size: 12px; font-weight: 600; color: #6b6560; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 7px;">Student ID / Matric No.</label>
                        <input type="text" wire:model="cf_matricNo" style="width: 100%; box-sizing: border-box; border: 1px solid #e2ddd6; border-radius: 8px; padding: 10px 14px; font-size: 14px; color: #9c9589; background: #f7f5f2; cursor: default;" readonly />
                        @error('cf_matricNo') <p style="font-size: 11px; color: #bf3a0e; margin-top: 5px;">{{ $message }}</p> @enderror
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-size: 12px; font-weight: 600; color: #6b6560; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 7px;">Crisis Type <span style="color: #bf3a0e;">*</span></label>
                        <div style="position: relative;">
                            <select wire:model.live="cf_crisisType" style="width: 100%; box-sizing: border-box; border: 1px solid #e2ddd6; border-radius: 8px; padding: 10px 34px 10px 14px; font-size: 14px; color: #1e1b18; background: #fff; outline: none; appearance: none; -webkit-appearance: none; cursor: pointer;" onchange="this.style.borderColor='#e2ddd6'" onfocus="this.style.borderColor='#bf3a0e'; this.style.boxShadow='0 0 0 3px rgba(191,58,14,0.09)'" onblur="this.style.borderColor='#e2ddd6'; this.style.boxShadow='none'">
                                <option value="">Select crisis type</option>
                                <option value="Natural Disaster">Natural Disaster</option>
                                <option value="Accident">Accident</option>
                                <option value="Illness">Illness</option>
                                <option value="Other">Other</option>
                            </select>
                            <svg fill="none" stroke="currentColor" stroke-width="0" viewBox="0 0 24 24" style="position: absolute; right: 13px; top: 50%; transform: translateY(-50%); width: 0; height: 0; border-left: 4px solid transparent; border-right: 4px solid transparent; border-top: 5px solid #9c9589; pointer-events: none;"></svg>
                        </div>
                        @error('cf_crisisType') <p style="font-size: 11px; color: #bf3a0e; margin-top: 5px;">{{ $message }}</p> @enderror
                    </div>
                </div>
            </div>

            {{-- Section 2: Crisis Details (conditional) --}}
            @if($cf_crisisType)
            <div style="margin-bottom: 40px;">
                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid #e5e2db;">
                    <span style="font-size: 13px; font-weight: 700; color: #1e1b18; letter-spacing: 0.06em; text-transform: uppercase;">Crisis Details</span>
                </div>

                @if($cf_crisisType === 'Natural Disaster')
                <div style="background: #fff; border: 1px solid #e5e2db; border-radius: 10px; padding: 20px 22px; margin-bottom: 20px;">
                    <p style="font-size: 11px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.08em; display: flex; align-items: center; gap: 6px; margin-bottom: 16px; color: #8a5a1e;">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="width: 12px; height: 12px;">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/>
                        </svg>
                        Natural Disaster Details
                    </p>
                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-size: 12px; font-weight: 600; color: #6b6560; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 7px;">Disaster Sub-Type <span style="color: #bf3a0e;">*</span></label>
                        <div style="position: relative;">
                            <select wire:model="cf_disasterSubType" style="width: 100%; box-sizing: border-box; border: 1px solid #e2ddd6; border-radius: 8px; padding: 10px 34px 10px 14px; font-size: 14px; color: #1e1b18; background: #fff; outline: none; appearance: none; -webkit-appearance: none; cursor: pointer;">
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
                        @error('cf_disasterSubType') <p style="font-size: 11px; color: #bf3a0e; margin-top: 5px;">{{ $message }}</p> @enderror
                    </div>
                </div>
                @endif

                @if($cf_crisisType === 'Accident')
                <div style="background: #fff; border: 1px solid #e5e2db; border-radius: 10px; padding: 20px 22px; margin-bottom: 20px;">
                    <p style="font-size: 11px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.08em; display: flex; align-items: center; gap: 6px; margin-bottom: 16px; color: #9b2c20;">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="width: 12px; height: 12px;">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Accident Details
                    </p>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                        <div>
                            <label style="display: block; font-size: 12px; font-weight: 600; color: #6b6560; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 7px;">Date &amp; Time <span style="color: #bf3a0e;">*</span></label>
                            <input type="datetime-local" wire:model="cf_incidentDateTime" style="width: 100%; box-sizing: border-box; border: 1px solid #e2ddd6; border-radius: 8px; padding: 10px 14px; font-size: 14px; color: #1e1b18; background: #fff;" />
                            @error('cf_incidentDateTime') <p style="font-size: 11px; color: #bf3a0e; margin-top: 5px;">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label style="display: block; font-size: 12px; font-weight: 600; color: #6b6560; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 7px;">Accident Location <span style="color: #bf3a0e;">*</span></label>
                            <input type="text" wire:model="cf_location" placeholder="e.g., Campus Library" style="width: 100%; box-sizing: border-box; border: 1px solid #e2ddd6; border-radius: 8px; padding: 10px 14px; font-size: 14px; color: #1e1b18; background: #fff;" />
                            @error('cf_location') <p style="font-size: 11px; color: #bf3a0e; margin-top: 5px;">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                            <input type="checkbox" wire:model.live="cf_wasHospitalized" style="width: 16px; height: 16px; flex-shrink: 0; accent-color: #bf3a0e; cursor: pointer;" />
                            <span style="font-size: 13px; color: #4a453f;">The student was admitted to a hospital</span>
                        </label>
                    </div>
                    @if($cf_wasHospitalized)
                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-size: 12px; font-weight: 600; color: #6b6560; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 7px;">Hospital Name <span style="color: #bf3a0e;">*</span></label>
                        <input type="text" wire:model="cf_hospitalName" placeholder="e.g., Hospital Sultanah Aminah" style="width: 100%; box-sizing: border-box; border: 1px solid #e2ddd6; border-radius: 8px; padding: 10px 14px; font-size: 14px; color: #1e1b18; background: #fff;" />
                        @error('cf_hospitalName') <p style="font-size: 11px; color: #bf3a0e; margin-top: 5px;">{{ $message }}</p> @enderror
                    </div>
                    @endif
                </div>
                @endif

                @if($cf_crisisType === 'Illness')
                <div style="background: #fff; border: 1px solid #e5e2db; border-radius: 10px; padding: 20px 22px; margin-bottom: 20px;">
                    <p style="font-size: 11px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.08em; display: flex; align-items: center; gap: 6px; margin-bottom: 16px; color: #2a4e8a;">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="width: 12px; height: 12px;">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Illness Details
                    </p>
                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-size: 12px; font-weight: 600; color: #6b6560; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 7px;">Illness Type <span style="color: #bf3a0e;">*</span></label>
                        <input type="text" wire:model="cf_illnessType" placeholder="e.g., COVID-19, Dengue Fever, Mental Health Crisis" style="width: 100%; box-sizing: border-box; border: 1px solid #e2ddd6; border-radius: 8px; padding: 10px 14px; font-size: 14px; color: #1e1b18; background: #fff;" />
                        @error('cf_illnessType') <p style="font-size: 11px; color: #bf3a0e; margin-top: 5px;">{{ $message }}</p> @enderror
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-size: 12px; font-weight: 600; color: #6b6560; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 7px;">
                            Medical Letter
                            <span style="font-size:11px;color:#9c9589;text-transform:none;letter-spacing:0;font-weight:400;"> (optional)</span>
                        </label>
                        <div style="border: 1.5px dashed #d9d3cb; border-radius: 10px; padding: 22px; text-align: center; cursor: pointer; background: #fff; {{ $cf_medicalLetter ? 'border-color: #bf3a0e; background: #fdf6f2;' : '' }}" onclick="document.getElementById('medical-letter-input').click()" onmouseover="this.style.borderColor='#bf3a0e'; this.style.background='#fdf6f2';" onmouseout="this.style.borderColor='#d9d3cb'; this.style.background='#fff';">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="width: 18px; height: 18px; color: #c5bfb8; margin: 0 auto 8px; display: block; {{ $cf_medicalLetter ? 'color: #2d7a47;' : '' }}">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                            </svg>
                            @if($cf_medicalLetter)
                                <p style="margin: 0; font-size: 13px; color: #2d7a47;">{{ $cf_medicalLetter->getClientOriginalName() }}</p>
                                <small style="font-size: 11px; color: #9c9589; margin-top: 3px; display: block;">Click to replace</small>
                            @else
                                <p style="margin: 0; font-size: 13px; color: #6b6560;">Click to upload medical letter</p>
                                <small style="font-size: 11px; color: #9c9589; margin-top: 3px; display: block;">PDF, JPG, PNG, DOC — max 10 MB</small>
                            @endif
                        </div>
                        <input id="medical-letter-input" type="file" wire:model="cf_medicalLetter" accept=".pdf,.jpg,.jpeg,.png,.doc,.docx" style="display: none;" />
                        @error('cf_medicalLetter') <p style="font-size: 11px; color: #bf3a0e; margin-top: 5px;">{{ $message }}</p> @enderror
                    </div>
                </div>
                @endif

                @if($cf_crisisType !== 'Accident')
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 12px; font-weight: 600; color: #6b6560; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 7px;">Location <span style="color: #bf3a0e;">*</span></label>
                    <div style="position: relative;">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="position: absolute; left: 12px; top: 50%; transform: translateY(-50%); width: 14px; height: 14px; color: #bfb9af; pointer-events: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <input type="text" wire:model="cf_location" placeholder="e.g., Campus Library, Hostel Block A, Off-campus" style="width: 100%; box-sizing: border-box; border: 1px solid #e2ddd6; border-radius: 8px; padding: 10px 14px 10px 36px; font-size: 14px; color: #1e1b18; background: #fff;" />
                    </div>
                    @error('cf_location') <p style="font-size: 11px; color: #bf3a0e; margin-top: 5px;">{{ $message }}</p> @enderror
                </div>
                @endif
            </div>
            @endif

            {{-- Section 3: Description --}}
            <div style="margin-bottom: 40px;">
                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid #e5e2db;">
                    <span style="font-size: 13px; font-weight: 700; color: #1e1b18; letter-spacing: 0.06em; text-transform: uppercase;">Description</span>
                </div>
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 12px; font-weight: 600; color: #6b6560; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 7px;">Describe the crisis <span style="color: #bf3a0e;">*</span></label>
                    <textarea wire:model="cf_description" rows="5" placeholder="Provide as much detail as possible — what happened, when, who was affected, and any immediate steps already taken..." style="width: 100%; box-sizing: border-box; border: 1px solid #e2ddd6; border-radius: 8px; padding: 10px 14px; font-size: 14px; color: #1e1b18; background: #fff; outline: none; resize: none; line-height: 1.6;" onfocus="this.style.borderColor='#bf3a0e'; this.style.boxShadow='0 0 0 3px rgba(191,58,14,0.09)'" onblur="this.style.borderColor='#e2ddd6'; this.style.boxShadow='none'"></textarea>
                    @error('cf_description') <p style="font-size: 11px; color: #bf3a0e; margin-top: 5px;">{{ $message }}</p> @enderror
                </div>
            </div>

            {{-- Section 4: Supporting Documents --}}
            <div style="margin-bottom: 40px;">
                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid #e5e2db;">
                    <span style="font-size: 13px; font-weight: 700; color: #1e1b18; letter-spacing: 0.06em; text-transform: uppercase;">Supporting Documents</span>
                    <span style="font-size: 12px; color: #9c9589; margin-left: auto;">Optional</span>
                </div>
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 12px; font-weight: 600; color: #6b6560; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 7px;">
                        Attachments
                        <span style="font-size:11px;color:#9c9589;text-transform:none;letter-spacing:0;font-weight:400;"> — MC, Police Report, photos, etc.</span>
                    </label>
                    <div style="border: 1.5px dashed #d9d3cb; border-radius: 10px; padding: 22px; text-align: center; cursor: pointer; background: #fff; {{ ($cf_supportingDocs && count($cf_supportingDocs) > 0) ? 'border-color: #bf3a0e; background: #fdf6f2;' : '' }}" onclick="document.getElementById('supporting-docs-input').click()" onmouseover="this.style.borderColor='#bf3a0e'; this.style.background='#fdf6f2';" onmouseout="this.style.borderColor='#d9d3cb'; this.style.background='#fff';">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="width: 18px; height: 18px; color: #c5bfb8; margin: 0 auto 8px; display: block; {{ ($cf_supportingDocs && count($cf_supportingDocs) > 0) ? 'color: #2d7a47;' : '' }}">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                        </svg>
                        @if($cf_supportingDocs && count($cf_supportingDocs) > 0)
                            <p style="margin: 0; font-size: 13px; color: #2d7a47;">{{ count($cf_supportingDocs) }} file(s) selected</p>
                            <small style="font-size: 11px; color: #9c9589; margin-top: 3px; display: block;">Click to change</small>
                        @else
                            <p style="margin: 0; font-size: 13px; color: #6b6560;">Click to upload supporting documents</p>
                            <small style="font-size: 11px; color: #9c9589; margin-top: 3px; display: block;">PDF, JPG, PNG, DOC — max 10 MB per file</small>
                        @endif
                    </div>
                    <input id="supporting-docs-input" type="file" wire:model="cf_supportingDocs" accept=".pdf,.jpg,.jpeg,.png,.doc,.docx" multiple style="display: none;" />
                    @error('cf_supportingDocs.*') <p style="font-size: 11px; color: #bf3a0e; margin-top: 5px;">{{ $message }}</p> @enderror
                </div>
            </div>

            <hr style="border: none; border-top: 1px solid #e5e2db; margin: 32px 0;" />

            {{-- Consent --}}
            <div style="background: #f2f6fe; border: 1px solid #c8d9f0; border-radius: 10px; padding: 18px 20px; margin-bottom: 28px;">
                <label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;" for="crisis-consent">
                    <input type="checkbox" wire:model.live="cf_consent" id="crisis-consent" style="width: 16px; height: 16px; flex-shrink: 0; margin-top: 2px; accent-color: #bf3a0e; cursor: pointer;" />
                    <div>
                        <p style="font-size: 13px; font-weight: 600; color: #2a4e8a; display: flex; align-items: center; gap: 5px; margin-bottom: 5px; margin: 0 0 5px;">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="width: 13px; height: 13px;">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Consent to Share with Sejahtera Clinic / Staff
                        </p>
                        <p style="font-size: 12px; color: #4a6494; line-height: 1.6; margin: 0;">
                            I authorise the university to share relevant information from this report with Sejahtera Clinic and authorised staff members for verification and support purposes.
                        </p>
                    </div>
                </label>
                @error('cf_consent') <p style="font-size: 11px; color: #bf3a0e; margin-top: 8px; margin-left: 28px;">{{ $message }}</p> @enderror
            </div>

            {{-- Actions --}}
            <div style="display: flex; gap: 12px; align-items: center; justify-content: space-between;">
                <a href="{{ \App\Filament\Pages\KinDashboard::getUrl() }}" style="padding: 11px 28px; border: 1px solid #e2ddd6; background: #fff; color: #6b6560; border-radius: 8px; font-size: 14px; font-weight: 500; text-decoration: none; cursor: pointer; display: inline-flex; align-items: center; justify-content: center;" onmouseover="this.style.background='#faf9f7'; this.style.color='#1e1b18';" onmouseout="this.style.background='#fff'; this.style.color='#6b6560';">
                    Cancel
                </a>
                <button type="submit" style="padding: 11px 36px; border: none; border-radius: 8px; font-size: 14px; font-weight: 600; cursor: pointer; display: inline-flex; align-items: center; justify-content: center; gap: 8px; {{ $cf_submitted ? 'background: #ede9e3; color: #b5b0a8; cursor: not-allowed;' : 'background: #bf3a0e; color: #fff;' }}" {{ $cf_submitted ? 'disabled' : '' }} onmouseover="@if(!$cf_submitted) this.style.background='#a63309'; @endif" onmouseout="@if(!$cf_submitted) this.style.background='#bf3a0e'; @endif">
                    Submit Crisis Report
                </button>
            </div>

        </form>
    </main>
</div>

</x-filament-panels::page>
