/* Components shared by Raoof Cars UI kit */

const { useState, useEffect, useRef } = React;

/* ----- Lucide icons (loaded from CDN inside index.html) ----------------- */
function Icon({ name, size = 20, stroke = 1.75, ...rest }) {
  const ref = useRef(null);
  useEffect(() => {
    if (window.lucide && ref.current) {
      ref.current.innerHTML = '';
      const i = document.createElement('i');
      i.setAttribute('data-lucide', name);
      ref.current.appendChild(i);
      window.lucide.createIcons({ attrs: { 'stroke-width': stroke, width: size, height: size } });
    }
  }, [name, size, stroke]);
  return <span ref={ref} style={{ display: 'inline-flex', color: 'inherit' }} {...rest} />;
}

/* ----- Social icons (inline SVG) ---------------------------------------- */
function WhatsAppGlyph({ size = 18 }) {
  return (
    <svg width={size} height={size} viewBox="0 0 24 24" fill="currentColor">
      <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487 1.823.788 2.354.79 3.565.598.736-.116 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347M12.05 21.785a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884Z"/>
    </svg>
  );
}
function InstagramGlyph({ size = 18 }) {
  return (
    <svg width={size} height={size} viewBox="0 0 24 24" fill="currentColor">
      <path d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153 4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0 1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6 3 3 0 0 1 0-6z"/>
    </svg>
  );
}
function SnapchatGlyph({ size = 18 }) {
  return (
    <svg width={size} height={size} viewBox="0 0 24 24" fill="currentColor">
      <path d="M12.16 2c3.46 0 5.34 2.78 5.34 5.81 0 .55-.05 1.1-.13 1.62.7.42 1.45.85 2 1.05.36.13.6.45.6.83 0 .51-.39.78-.97.85-.43.05-.96.27-1.34.85.16.62.78 2.18 2.85 2.7.4.1.65.45.65.86 0 .55-.49.78-.97.86-.65.11-1.36.18-1.85.81-.07.16-.1.4-.18.7-.07.27-.18.55-.42.55-.27 0-.65-.09-1.06-.21-.94-.27-1.91-.27-2.97.31-.93.51-1.81 1.45-3.71 1.45-1.91 0-2.78-.94-3.71-1.45-1.06-.58-2.02-.58-2.97-.31-.4.12-.78.21-1.06.21-.24 0-.34-.27-.42-.55-.07-.3-.1-.55-.18-.7-.49-.62-1.2-.7-1.85-.81C2.69 17.93 2.2 17.7 2.2 17.15c0-.42.25-.76.65-.86 2.07-.51 2.69-2.07 2.85-2.7-.39-.58-.92-.8-1.34-.85-.58-.07-.97-.34-.97-.85 0-.39.24-.7.6-.83.55-.21 1.31-.62 2-1.05-.08-.51-.13-1.06-.13-1.62C5.86 4.78 7.78 2 11.2 2c.21-.01.71-.01.96 0z"/>
    </svg>
  );
}
function TikTokGlyph({ size = 18 }) {
  return (
    <svg width={size} height={size} viewBox="0 0 24 24" fill="currentColor">
      <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5.8 20.1a6.34 6.34 0 0 0 10.86-4.43V8.62a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1.84-.05z"/>
    </svg>
  );
}

/* ----- Buttons ---------------------------------------------------------- */
function Button({ variant = 'primary', children, onClick, icon, type = 'button' }) {
  const base = {
    fontFamily: "'Tajawal', sans-serif",
    fontWeight: 700,
    fontSize: 16,
    padding: '14px 32px',
    border: 0,
    cursor: 'pointer',
    borderRadius: 4,
    transition: 'background 220ms cubic-bezier(.22,.61,.36,1), color 220ms, transform 140ms',
    display: 'inline-flex', alignItems: 'center', gap: 10,
  };
  const variants = {
    primary: { background: '#D4A017', color: '#111111' },
    primaryHover: { background: '#E5B82E' },
    outline: { background: 'transparent', color: '#D4A017', border: '1.5px solid #D4A017' },
    outlineHover: { background: '#D4A017', color: '#111111' },
    dark: { background: '#111111', color: '#F5F0E8' },
    darkHover: { background: '#222' },
  };
  const [hover, setHover] = useState(false);
  return (
    <button
      type={type}
      onMouseEnter={() => setHover(true)}
      onMouseLeave={() => setHover(false)}
      onClick={onClick}
      style={{ ...base, ...variants[variant], ...(hover ? variants[variant + 'Hover'] : {}) }}
    >
      {icon}{children}
    </button>
  );
}

Object.assign(window, { Icon, WhatsAppGlyph, InstagramGlyph, SnapchatGlyph, TikTokGlyph, Button });
