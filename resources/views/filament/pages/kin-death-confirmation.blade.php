<x-filament-panels::page>

<div style="min-height: 100vh; background: #fff;">

    <!-- Header -->
    <div style="background: transparent; border-bottom: 1px solid #e5e2db; position: sticky; top: 0; z-index: 20;">
        <div style="max-width: 860px; margin: 0 auto; padding: 14px 32px; display: flex; align-items: center; justify-content: space-between;">
            <span style="font-size: 14px; font-weight: 600; color: #1e1b18;">Death Confirmation</span>
            <a href="{{ \App\Filament\Pages\KinDashboard::getUrl() }}" style="font-size: 13px; color: #8a8479; text-decoration: none; display: flex; align-items: center; gap: 5px;" onmouseover="this.style.color='#1e1b18'" onmouseout="this.style.color='#8a8479'">
                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="width:14px;height:14px;">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                </svg>
                Back
            </a>
        </div>
    </div>

    <!-- Hero Section -->
    <div style="background: #fff6f2; padding: 36px 32px; position: relative; overflow: hidden;">
        <div style="max-width: 860px; margin: 0 auto; display: flex; align-items: center; gap: 16px;">
            <div style="width: 40px; height: 40px; flex-shrink: 0; background: rgba(191,58,14,0.10); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="width: 18px; height: 18px; color: #bf3a0e;">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4v2m0 4v2M9 7h6m0-2h6a2 2 0 012 2v12a2 2 0 01-2 2h-6a2 2 0 01-2 2h-6a2 2 0 01-2-2V9a2 2 0 012-2h6a2 2 0 012-2z"/>
                </svg>
            </div>
            <div>
                <h1 style="font-size: 20px; font-weight: 700; color: #1e1b18; margin: 0; line-height: 1.2;">Death Confirmation</h1>
                <p style="font-size: 13px; color: #6b6560; margin: 4px 0 0;">Submit required documentation for verification</p>
            </div>
        </div>
    </div>

    <!-- Warning Notice -->
    <div style="background: #fff0f0; border-bottom: 2px solid #ffcccc;">
        <div style="max-width: 860px; margin: 0 auto; padding: 16px 32px; display: flex; align-items: flex-start; gap: 12px; font-size: 13px; color: #d32f2f; line-height: 1.5;">
            <svg fill="currentColor" viewBox="0 0 24 24" style="width: 16px; height: 16px; flex-shrink: 0; margin-top: 2px; color: #d32f2f;">
                <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/>
            </svg>
            <div>
                <strong style="font-weight: 700;">This action is sensitive and irreversible.</strong><br/>
                Please confirm only if the student has legally passed away. This requires legal documentation verification.
            </div>
        </div>
    </div>

    <!-- Main Form -->
    <div style="max-width: 860px; margin: 0 auto; padding: 40px 32px 80px;">
        <form wire:submit.prevent="submitDeathConfirmation">

            <!-- Section 1: Student Information -->
            <div style="margin-bottom: 40px;">
                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid #e5e2db;">
                    <span style="font-size: 13px; font-weight: 700; color: #1e1b18; letter-spacing: 0.06em; text-transform: uppercase;">Student Information</span>
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 12px; font-weight: 600; color: #6b6560; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 7px;">Matric Number <span style="color: #bf3a0e;">*</span></label>
                    <input type="text" wire:model="dc_matricNo" style="width: 100%; box-sizing: border-box; border: 1px solid #e2ddd6; border-radius: 8px; padding: 10px 14px; font-size: 14px; color: #1e1b18; background: #f7f5f2; cursor: default;" readonly />
                    @error('dc_matricNo') <p style="font-size: 11px; color: #bf3a0e; margin-top: 5px;">{{ $message }}</p> @enderror
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 12px; font-weight: 600; color: #6b6560; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 7px;">Student Name</label>
                    <input type="text" wire:model="dc_studentName" style="width: 100%; box-sizing: border-box; border: 1px solid #e2ddd6; border-radius: 8px; padding: 10px 14px; font-size: 14px; color: #1e1b18; background: #f7f5f2; cursor: default;" readonly />
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 12px; font-weight: 600; color: #6b6560; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 7px;">Date of Death <span style="color: #bf3a0e;">*</span></label>
                    <input type="date" wire:model="dc_dateOfDeath" style="width: 100%; box-sizing: border-box; border: 1px solid #e2ddd6; border-radius: 8px; padding: 10px 14px; font-size: 14px; color: #1e1b18; background: #fff; cursor: pointer;" />
                    @error('dc_dateOfDeath') <p style="font-size: 11px; color: #bf3a0e; margin-top: 5px;">{{ $message }}</p> @enderror
                </div>
            </div>

            <!-- Section 2: Death Certificate Upload -->
            <div style="margin-bottom: 40px;">
                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid #e5e2db;">
                    <span style="font-size: 13px; font-weight: 700; color: #1e1b18; letter-spacing: 0.06em; text-transform: uppercase;">Death Certificate</span>
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 12px; font-weight: 600; color: #6b6560; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 7px;">Upload Certificate <span style="color: #bf3a0e;">*</span></label>
                    <div style="width: 100%; border: 2px dashed #e2ddd6; border-radius: 10px; padding: 40px 20px; text-align: center; cursor: pointer; background: #fafaf8;" onclick="document.getElementById('death-cert-input').click()" onmouseover="this.style.borderColor='#bf3a0e'; this.style.background='#fdf6f2';" onmouseout="this.style.borderColor='#e2ddd6'; this.style.background='#fafaf8';">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="width: 18px; height: 18px; color: #c5bfb8; margin: 0 auto 8px; display: block;">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                        </svg>
                        @if($dc_deathCertificate)
                            <p style="margin: 0; font-size: 13px; color: #2d7a47;">{{ $dc_deathCertificate->getClientOriginalName() }}</p>
                            <small style="font-size: 11px; color: #9c9589; margin-top: 3px; display: block;">Click to replace</small>
                        @else
                            <p style="margin: 0; font-size: 13px; color: #6b6560;">Click to upload death certificate</p>
                            <small style="font-size: 11px; color: #9c9589; margin-top: 3px; display: block;">PDF, JPG, PNG, DOC — max 10 MB</small>
                        @endif
                    </div>
                    <input id="death-cert-input" type="file" wire:model="dc_deathCertificate" accept=".pdf,.jpg,.jpeg,.png,.doc,.docx" style="display: none;" />
                    @error('dc_deathCertificate') <p style="font-size: 11px; color: #bf3a0e; margin-top: 5px;">{{ $message }}</p> @enderror
                </div>
            </div>

            <hr style="border: none; border-top: 1px solid #e5e2db; margin: 32px 0;" />

            <!-- Consent Confirmation -->
            <div style="margin-bottom: 28px;">
                <label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;">
                    <input type="checkbox" wire:model.live="dc_consent" id="death-consent" style="width: 18px; height: 18px; margin-top: 2px; flex-shrink: 0; cursor: pointer; accent-color: #bf3a0e;" />
                    <div style="flex: 1;">
                        <p style="margin: 0; padding: 0; font-size: 13px; font-weight: 600; color: #1e1b18; display: flex; align-items: center; gap: 8px; margin-bottom: 5px;">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="width: 16px; height: 16px; color: #bf3a0e;">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Confirm Death and Legal Documentation
                        </p>
                        <p style="margin: 6px 0 0; padding: 0; font-size: 12px; color: #6b6560; line-height: 1.5;">
                            I confirm that the student has legally passed away and that the attached document is authentic legal documentation. I understand this action is permanent and irreversible.
                        </p>
                    </div>
                </label>
                @error('dc_consent') <p style="font-size: 11px; color: #bf3a0e; margin-top: 8px; margin-left: 28px;">{{ $message }}</p> @enderror
            </div>

            <!-- Actions -->
            <div style="display: flex; align-items: center; gap: 12px; padding-top: 20px;">
                <a href="{{ \App\Filament\Pages\KinDashboard::getUrl() }}" style="flex: 1; padding: 12px 24px; background: transparent; border: 1px solid #e2ddd6; border-radius: 8px; font-size: 14px; font-weight: 600; color: #6b6560; text-decoration: none; text-align: center; cursor: pointer; display: inline-block;" onmouseover="this.style.borderColor='#bf3a0e'; this.style.color='#bf3a0e';" onmouseout="this.style.borderColor='#e2ddd6'; this.style.color='#6b6560';">
                    Cancel
                </a>
                <button type="submit" style="flex: 1; padding: 12px 24px; border: none; border-radius: 8px; font-size: 14px; font-weight: 600; cursor: pointer; {{ $dc_submitted ? 'background: #e2ddd6; color: #9c9589; cursor: not-allowed;' : 'background: #bf3a0e; color: #fff;' }}" {{ $dc_submitted ? 'disabled' : '' }} onmouseover="@if(!$dc_submitted) this.style.background='#a63209'; @endif" onmouseout="@if(!$dc_submitted) this.style.background='#bf3a0e'; @endif">
                    {{ $dc_submitted ? 'Submitted' : 'Submit Confirmation' }}
                </button>
            </div>

        </form>
    </div>
</div>

</x-filament-panels::page>
