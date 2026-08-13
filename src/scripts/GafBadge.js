import React, { useState } from "react"

const GAF_PROFILE_URL =
	"https://www.gaf.com/en-us/roofing-contractors/residential/usa/tx/houston/urena-roofing-contractor-llc-1132678"
const GAF_LOGO_URL = "/wp-content/uploads/2026/08/LOGO-VECTOR-GAF.png"

// Estructurado como lista para poder sumar más certificaciones más adelante
// sin tocar el resto del componente.
const CERTIFICATIONS = [{ label: "GAF Certified Contractor", image: GAF_LOGO_URL, link: GAF_PROFILE_URL }]

function ShieldIcon({ className = "" }) {
	return (
		<svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
			<path
				d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"
				stroke="currentColor"
				strokeWidth="1.8"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
			<path d="M9 12l2 2 4-4" stroke="currentColor" strokeWidth="1.8" strokeLinecap="round" strokeLinejoin="round" />
		</svg>
	)
}

function MinusIcon({ className = "" }) {
	return (
		<svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
			<path d="M5 12h14" stroke="currentColor" strokeWidth="2.2" strokeLinecap="round" />
		</svg>
	)
}

function ExternalLinkIcon({ className = "" }) {
	return (
		<svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
			<path d="M14 5H19V10" stroke="currentColor" strokeWidth="1.7" strokeLinecap="round" strokeLinejoin="round" />
			<path d="M10 14L19 5" stroke="currentColor" strokeWidth="1.7" strokeLinecap="round" strokeLinejoin="round" />
			<path
				d="M19 14V18a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1H10"
				stroke="currentColor"
				strokeWidth="1.7"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
		</svg>
	)
}

function GafBadge() {
	const [isOpen, setIsOpen] = useState(false)
	const [hoveredIndex, setHoveredIndex] = useState(null)

	return (
		<div
			className="ur-gaf-mobile-shift fixed left-0 top-[42%] z-[850] -translate-y-1/2"
			style={{ fontFamily: "'Public Sans', 'Segoe UI', Arial, sans-serif" }}
		>
			{!isOpen && (
				<button
					type="button"
					onClick={() => setIsOpen(true)}
					aria-label="View certifications"
					className="flex flex-col items-center gap-2.5 rounded-r-[10px] bg-[#12103A] px-2.5 py-4 text-[#F6BE15] shadow-[6px_8px_24px_rgba(18,16,58,0.24)] transition-all hover:bg-[#221D5C] hover:pr-3.5"
				>
					<ShieldIcon className="h-[19px] w-[19px] flex-shrink-0" />
					<span
						className="text-[0.66rem] font-bold uppercase tracking-[0.16em]"
						style={{ writingMode: "vertical-rl", transform: "rotate(180deg)", fontFamily: "'IBM Plex Mono', monospace" }}
					>
						Certifications
					</span>
				</button>
			)}

			{isOpen && (
				<div className="relative">
					{/* Preview grande — se abre a la derecha del panel al pasar el mouse sobre un item */}
					{hoveredIndex !== null && (
						<div className="absolute left-full top-1/2 -translate-y-1/2 ml-3 w-[300px] rounded-[10px] border border-[#12103A]/10 bg-white p-4 text-center shadow-[10px_16px_40px_rgba(18,16,58,0.28)] animate-[urGafFade_.18s_ease_both]">
							<div className="flex items-center justify-center rounded-[8px] bg-white p-2">
								<img
									src={CERTIFICATIONS[hoveredIndex].image}
									alt={CERTIFICATIONS[hoveredIndex].label}
									className="h-[268px] w-[268px] object-contain"
								/>
							</div>
							<p className="mt-3 text-[0.72rem] font-bold uppercase tracking-[0.08em] text-[#5B5F6B]">Click to enlarge</p>
						</div>
					)}

					<div className="w-[250px] rounded-r-[10px] border border-[#12103A]/10 bg-white p-3.5 shadow-[6px_14px_40px_rgba(18,16,58,0.22)] animate-[urGafIn_.22s_ease_both]">
						<div className="flex items-center justify-between pb-2.5">
							<span
								className="text-[0.64rem] font-bold uppercase tracking-[0.14em] text-[#C9910A]"
								style={{ fontFamily: "'IBM Plex Mono', monospace" }}
							>
								Certifications
							</span>
							<button
								type="button"
								onClick={() => setIsOpen(false)}
								aria-label="Minimize"
								className="flex h-6 w-6 items-center justify-center rounded-[6px] bg-[#EEF1F5] text-[#12103A] transition hover:bg-[#12103A]/10"
							>
								<MinusIcon className="h-3.5 w-3.5" />
							</button>
						</div>

						<ul className="flex flex-col gap-2">
							{CERTIFICATIONS.map((cert, i) => (
								<li key={cert.label}>
									<a
										href={cert.link}
										target="_blank"
										rel="noopener noreferrer"
										onMouseEnter={() => setHoveredIndex(i)}
										onMouseLeave={() => setHoveredIndex(null)}
										onFocus={() => setHoveredIndex(i)}
										onBlur={() => setHoveredIndex(null)}
										className="flex items-center gap-2.5 rounded-[8px] border border-[#12103A]/10 px-3 py-2.5 text-inherit no-underline transition hover:border-[#C9910A] hover:bg-[#EEF1F5]"
									>
										<span className="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-[#EEF1F5] text-[#C9910A]">
											<ShieldIcon className="h-4 w-4" />
										</span>
										<span className="flex-1 text-[0.8rem] font-bold text-[#12103A]">{cert.label}</span>
										<span className="flex-shrink-0 text-[#5B5F6B] opacity-70">
											<ExternalLinkIcon className="h-3.5 w-3.5" />
										</span>
									</a>
								</li>
							))}
						</ul>
					</div>
				</div>
			)}

			<style>{`
				@keyframes urGafIn { from { opacity: 0; transform: translateX(-10px); } to { opacity: 1; transform: translateX(0); } }
				@keyframes urGafFade { from { opacity: 0; transform: translateX(-6px); } to { opacity: 1; transform: translateX(0); } }
				@media (max-width: 640px) {
					.ur-gaf-mobile-shift { top: auto !important; bottom: 96px !important; transform: none !important; }
				}
			`}</style>
		</div>
	)
}

export default GafBadge