/* Floating WhatsApp FAB (bottom-left in RTL) */
function WhatsAppFab() {
  return (
    <a
      href="https://wa.me/436608433874"
      target="_blank"
      rel="noopener"
      style={{
        position: 'fixed', bottom: 28, left: 28,
        zIndex: 200,
        display: 'flex', alignItems: 'center', gap: 10,
        background: '#25D366', color: 'white',
        fontFamily: "'Tajawal', sans-serif", fontWeight: 700, fontSize: 15,
        padding: '14px 22px',
        borderRadius: 999,
        boxShadow: '0 16px 40px rgba(37,211,102,0.35), 0 4px 10px rgba(0,0,0,0.15)',
        textDecoration: 'none',
        transition: 'transform 220ms cubic-bezier(.22,.61,.36,1), box-shadow 220ms',
      }}
      onMouseEnter={e => { e.currentTarget.style.transform = 'translateY(-2px)'; }}
      onMouseLeave={e => { e.currentTarget.style.transform = 'translateY(0)'; }}
    >
      <WhatsAppGlyph size={22} />
      تواصل عبر واتساب
    </a>
  );
}
window.WhatsAppFab = WhatsAppFab;
